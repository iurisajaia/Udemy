<?php


namespace App\Repository\Template;


interface TemplateRepositoryInterface{
    public function searchTemplates($keyword);
    public function all();
    public function store($request);
    public function edit($id);
    public function destroy($id);

}
