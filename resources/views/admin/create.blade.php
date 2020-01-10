@extends('layouts.admin')

@section('adminsection')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
          <a href="#">Create</a>
        </li>
      </ol>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong>Basic Form</strong> Elements</div>
        <div class="card-body">
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">TiTle</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="title" placeholder="TiTle">
              </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Author</label>
                <div class="col-md-9">
                  <input class="form-control" id="text-input" type="text" name="author" placeholder="Author">
                </div>
              </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="textarea-input">Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="textarea-input" name="description" rows="9" placeholder="Description.."></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="file-input">Image</label>
              <div class="col-md-9">
                <input id="file-input" type="file" name="image">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="file-multiple-input">File</label>
              <div class="col-md-9">
                <input id="file-multiple-input" type="file" name="file">
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm btn-primary" type="submit">
            <i class="fa fa-dot-circle-o"></i> Submit</button>
        </div>
      </div>
    </div>
</div>
    <!-- /.col-->
  </div>
</div>
  @endsection