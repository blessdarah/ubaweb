<header id="header">
    <!-- header two area start -->
    <div class="header-two">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6 d-block d-lg-none">
                    <div class="logo">
                        <img src="{{asset('frontend/images/ubalogo.png')}}" style="display: inline-block; margin: 0; max-width: auto; height: 50px; position: relative; top: -10px" alt="logo">
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-1 d-none d-lg-block">
                    <div class="main-menu menu-style2">
                        <nav>
                            <ul id="m_menu_active">
                                <li><a href="{{route('home')}}">{{__("Home")}}</a></li>
                                <li><a href="{{route('about')}}">{{__("About")}}</a></li>
                                <li><a href="javascript:void(0);">{{__("Schools & Faculties")}}</a>
                                    <ul class="submenu" style="height: 500px; overflow-y: scroll; width: 300px">
                                        @foreach($schools as $school)
                                            <li><a href="{{$school->url()}}">{{$school->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">{{__("Research")}}</a>
                                    <ul class="submenu">
                                        <li><a href="#">{{__("Research profiles")}}</a></li>
                                        <li><a href="#">{{__("UBa ETD")}}</a></li>
                                    </ul>
                                </li>
                                <li class="middle-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('frontend/images/ubalogo.png')}}" style="max-width: auto; height: 70px; position: relative; top: -10px" alt="logo">
                                    </a>
                                </li>
                                <li><a href="{{route('events')}}">Events</a></li>
                                <li><a href="javascript:void(0);">{{__("News")}}</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('blog')}}">{{_("Blog")}}</a></li>
                                        <li><a href="{{route('pressRelease')}}">{{__("Press release")}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">{{__("Admissions")}}</a>
                                    <ul class="submenu">
                                        <li><a href="https://ubastudent.online/admission" target="_blank">{{__("Apply for admissions")}}</a></li>
                                        <li><a href="https://ubastudent.online/find_me" target="_blank">{{__("Check admission list")}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="header-bottom-right-style-2">
                        <ul>
                            <li><a class="btn btn-dark btn-round text-white" href="https://ubastudent.online" target="_blank"><i class="fa fa-link mr-2"></i>{{__("UBa Student")}}</a></li>
                        @if(auth()->id())
                            <li><a class="btn btn-light btn-round" href="/admin"><i class="fa fa-login"></i>{{__("Dashboard")}}</a></li>
                        @else
                            <li><a class="btn btn-light btn-round" href="/admin/login"><i class="fa fa-login"></i>{{__("Admin login")}}</a></li>
                        @endif
                        </ul>
                    </div>
                    <!-- Button trigger modal -->  

                </div><!-- col-lg-2 -->
                <div class="col-12 d-block d-lg-none">
                    <div id="mobile_menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- header two area end -->
</header>
