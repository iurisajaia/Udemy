<?php


namespace App\Repository\Template;


use App\Template;
use Storage;

class TemplateRepository implements TemplateRepositoryInterface {
    public function searchTemplates($keyword){
        return Template::where('title', 'LIKE' , '%' . $keyword . '%')->paginate(10);
    }

    public function all(){
        return Template::orderBy('id', 'desc')->paginate(20);
    }

    public function store($request){
        $image = $request->image->store('images');


        Template::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_url' => $request->file_url,
            'image' => $image,
            'udemy_url' => $request->udemy_url
        ]);
    }

    public function edit($id){
        return Template::where('id' , $id)->firstOrFail();
    }
    public function destroy($id){
        $template = Template::where('id' , $id)->firstOrFail();
        Storage::delete($template->image);
        $template->delete();
    }

}
