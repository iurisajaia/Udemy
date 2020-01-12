@extends('layouts.admin')

@section('adminsection')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home</a>
      </li>
    </ol>
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-primary">
              <div class="card-body pb-0">
                <div class="text-value">{{$courses_count}}</div>
                <div>Courses</div>
              </div>
              <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                <canvas class="chart" id="card-chart1" height="70"></canvas>
              </div>
            </div>
          </div>
          <!-- /.col-->
          <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-info">
              <div class="card-body pb-0">
                <div class="text-value">{{$messages_count}}</div>
                <div>Messages</div>
              </div>
              <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                <canvas class="chart" id="card-chart2" height="70"></canvas>
              </div>
            </div>
          </div>
          <!-- /.col-->
          <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-warning">
              <div class="card-body pb-0">
                <div class="text-value">{{$comments_count}}</div>
                <div>Comments</div>
              </div>
              <div class="chart-wrapper mt-3" style="height:70px;">
                <canvas class="chart" id="card-chart3" height="70"></canvas>
              </div>
            </div>
          </div>
          <!-- /.col-->
          <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-danger">
              <div class="card-body pb-0">
                <div class="text-value">9.823</div>
                <div>Categories</div>
              </div>
              <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                <canvas class="chart" id="card-chart4" height="70"></canvas>
              </div>
            </div>
          </div>
          <!-- /.col--> 
        </div>
        
      </div>
    </div>

@endsection