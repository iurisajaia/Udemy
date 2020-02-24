<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;

class TemplateController extends Controller{
    
    public function index(){
        $templates = Template::orderBy('id', 'desc')->paginate(20);

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - free online courses',
            "description" => "FreeOnlineCourses.me -  website dashboard , where you can add your courses easely",
        ];


        $data = [
            'templates' => $templates,
            'seo' => $this->seo
        ];

        return view('templates')->with($data);
    }


    
    

    
    public function show($title , $id){
        $template = Template::where('id' , $id)->firstOrFail();

        $templates = Template::orderBy('id', 'desc')->take(10)->get(); // for sidebar

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - ' . $template->title .' ',
            "description" => 'About Template - ' . $template->title .' ',
        ];

        $data = [
            'template' => $template,
            'templates' => $templates,
            'seo' => $this->seo
        ];

        return view('template-details')->with($data);
    }

    
    

    
    public function update(Request $request, $id){
        $template = Template::where('id' , $id)->firstOrFail();

        $template->title = $request->title;
        $template->file_url = $request->file_url;
        $template->udemy_url = $request->udemy_url;
        $template->description = $request->description;
        $template->save();

        return redirect('home/templates');
    }

    
    
}
