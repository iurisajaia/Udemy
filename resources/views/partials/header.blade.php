<header id="main-header" class="header-one">

    <nav id="menu-1" class="mega-menu" data-color="">

        <div class="menu-list-items">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="menu-logo">
                            <li>
                                <a href="/"><img src="{{URL::asset('images/logo.png')}}" alt="logo" class="img-fluid"></a>
                            </li>
                        </ul>

                        <ul class="menu-search-bar pull-right active">
                            <ul class="menu-links">
                                @if(Auth::user())
                                    <li><a href="/profile/{{Auth::user()->id}}">{{Auth::user()->name}}</a></li>
                                    <li><a href="/logout">Log Out</a></li>
                                @else
                                    <li><a href="/login" class="{{Request::is('login') ? 'active' : ''}}">Login</a></li>
                                    <li><a href="/register" class="{{Request::is('register') ? 'active' : ''}}">Register</a></li>
                                @endif
                            </ul>
                        </ul>

                        <ul class="menu-links">

                            <li><a href="/" class="{{Request::is('/') ? 'active' : ''}}">Home</a></li>
                            <li><a href="/courses" class="{{Request::is('courses') ? 'active' : ''}}">Courses</a></li>
                            <li><a href="/templates" class="{{Request::is('templates') ? 'active' : ''}}">Templates</a></li>
                            {{--                                                <li><a href="/blog" class="{{Request::is('blog') ? 'active' : ''}}">Blog</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>
