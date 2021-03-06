<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@isset( $seo ){{$seo["title"]}}@endif</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="@isset( $seo ){{$seo["title"]}}@endif" name="title" />
    <meta content="@isset( $seo ){{$seo["description"]}}@endif" name="description" />


    <meta content="@isset( $seo ){{$seo["title"]}}@endif" property="og:title" />
    <meta content="@isset( $seo ){{$seo["description"]}}@endif" property="og:description" />

    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="FreeOnlineCourses.me"/>
    <meta content="FreeOnlineCourses.me" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="@isset( $seo ){{@$seo["canonical"]}}@endif"/>

    <meta name="keywoards"
        content="
        online classes ,
        free online courses ,
        online courses ,
        online degrees,
        tutorial ,
        javascript tutorial,
        python tutorial,
        angular tutorial,
        java tutorial,
        photoshop tutorial,
        react tutorial,
        docker tutorial,
        node js tutorial,
        php tutorial,
        laravel tutorial
        "
        />
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href={{ URL::asset('/admin/css/style.min.css')}} rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <ul class="nav navbar-nav ml-auto pr-2">
        <li>
          <form action="/logout">
          <button class="btn btn-primary">Log Out </button>
          </form>
        </li>
      </ul>


    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/">
                <i class="nav-icon icon-speedometer"></i> Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home/courses">
                <i class="nav-icon icon-speedometer"></i> Courses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home/templates">
                <i class="nav-icon icon-speedometer"></i> Templates
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home/categories">
                <i class="nav-icon icon-speedometer"></i> Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home/messages">
                <i class="nav-icon icon-speedometer"></i> Messages
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home/create">
                <i class="nav-icon icon-speedometer"></i> Create Course
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home/create/category">
                <i class="nav-icon icon-speedometer"></i> Create Category
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home/create/template">
                <i class="nav-icon icon-speedometer"></i> Create Template
              </a>
            </li>
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link" href="/home/blog/create">--}}
{{--                <i class="nav-icon icon-speedometer"></i> Create Blog--}}
{{--              </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link" href="/home/blog/">--}}
{{--                <i class="nav-icon icon-speedometer"></i> Blog--}}
{{--              </a>--}}
{{--            </li>--}}

          </ul>
        </nav>
      </div>

      <main class="main">

      @yield('adminsection')


      </main>
    <aside class="aside-menu">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
            <i class="icon-list"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
            <i class="icon-speech"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
            <i class="icon-settings"></i>
          </a>
        </li>
      </ul>
      <!-- Tab panes-->
      <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
          <div class="list-group list-group-accent">
            <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
            <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
              <div class="avatar float-right">
                <img class="img-avatar" src="img/avatars/7.jpg" alt="freeonlinecourses.me">
              </div>
              <div>Meeting with
                <strong>Lucas</strong>
              </div>
              <small class="text-muted mr-3">
                <i class="icon-calendar"></i>  1 - 3pm</small>
              <small class="text-muted">
                <i class="icon-location-pin"></i>  Palo Alto, CA</small>
            </div>
            <div class="list-group-item list-group-item-accent-info">
              <div class="avatar float-right">
                <img class="img-avatar" src="img/avatars/4.jpg" alt="freeonlinecourses.me">
              </div>
              <div>Skype with
                <strong>Megan</strong>
              </div>
              <small class="text-muted mr-3">
                <i class="icon-calendar"></i>  4 - 5pm</small>
              <small class="text-muted">
                <i class="icon-social-skype"></i>  On-line</small>
            </div>
            <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
            <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
              <div>New UI Project -
                <strong>deadline</strong>
              </div>
              <small class="text-muted mr-3">
                <i class="icon-calendar"></i>  10 - 11pm</small>
              <small class="text-muted">
                <i class="icon-home"></i>  creativeLabs HQ</small>
              <div class="avatars-stack mt-2">
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/2.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/3.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/4.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/5.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/6.jpg" alt="freeonlinecourses.me">
                </div>
              </div>
            </div>
            <div class="list-group-item list-group-item-accent-success list-group-item-divider">
              <div>
                <strong>#10 Startups.Garden</strong> Meetup</div>
              <small class="text-muted mr-3">
                <i class="icon-calendar"></i>  1 - 3pm</small>
              <small class="text-muted">
                <i class="icon-location-pin"></i>  Palo Alto, CA</small>
            </div>
            <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
              <div>
                <strong>Team meeting</strong>
              </div>
              <small class="text-muted mr-3">
                <i class="icon-calendar"></i>  4 - 6pm</small>
              <small class="text-muted">
                <i class="icon-home"></i>  creativeLabs HQ</small>
              <div class="avatars-stack mt-2">
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/2.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/3.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/4.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/5.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/6.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="freeonlinecourses.me">
                </div>
                <div class="avatar avatar-xs">
                  <img class="img-avatar" src="img/avatars/8.jpg" alt="freeonlinecourses.me">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="img/avatars/7.jpg" alt="freeonlinecourses.me">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="img/avatars/7.jpg" alt="freeonlinecourses.me">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="img/avatars/7.jpg" alt="freeonlinecourses.me">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="img/avatars/7.jpg" alt="freeonlinecourses.me">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="img/avatars/7.jpg" alt="freeonlinecourses.me">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
          <h6>Settings</h6>
          <div class="aside-options">
            <div class="clearfix mt-4">
              <small>
                <b>Option 1</b>
              </small>
              <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                <input class="switch-input" type="checkbox" checked="">
                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>
          <div class="aside-options">
            <div class="clearfix mt-3">
              <small>
                <b>Option 2</b>
              </small>
              <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                <input class="switch-input" type="checkbox">
                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>
          <div class="aside-options">
            <div class="clearfix mt-3">
              <small>
                <b>Option 3</b>
              </small>
              <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                <input class="switch-input" type="checkbox">
                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
              </label>
            </div>
          </div>
          <div class="aside-options">
            <div class="clearfix mt-3">
              <small>
                <b>Option 4</b>
              </small>
              <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                <input class="switch-input" type="checkbox" checked="">
                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
              </label>
            </div>
          </div>
          <hr>
          <h6>System Utilization</h6>
          <div class="text-uppercase mb-1 mt-4">
            <small>
              <b>CPU Usage</b>
            </small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">348 Processes. 1/4 Cores.</small>
          <div class="text-uppercase mb-1 mt-2">
            <small>
              <b>Memory Usage</b>
            </small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">11444GB/16384MB</small>
          <div class="text-uppercase mb-1 mt-2">
            <small>
              <b>SSD 1 Usage</b>
            </small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">243GB/256GB</small>
          <div class="text-uppercase mb-1 mt-2">
            <small>
              <b>SSD 2 Usage</b>
            </small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">25GB/256GB</small>
        </div>
      </div>
    </aside>
  </div>


  </body>
</html>
