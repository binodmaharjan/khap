<nav class="navbar-default navbar-side" role="navigation" style="left: 0px;">
    <div class="sidebar-collapse">

        @php
            $activeRoute = Route::currentRouteName()
        @endphp
            <ul class="nav" id="main-menu">

                <li class="{{strcmp($activeRoute,'home')==0?'active-menu':''}}">
                    <a  href="/home"><i class="fa fa-dashboard" ></i> Dashboard</a>
                </li>
                <li class="{{strcmp($activeRoute,'admin_category')==0?'active-menu':''}}">
                    <a href="{{route('admin_category')}}"><i class="fa fa-th-list"></i> Categories</a>
                </li>

                <li class="{{strcmp($activeRoute,'admin_menu')==0?'active-menu':''}}">
                    <a href="{{route('admin_menu')}}"><i class="fa fa-bars"></i> Nav Menu</a>
                </li>
                <li class="{{strcmp($activeRoute,'admin_articles')==0?'active-menu':''}}">
                    <a href="{{route('admin_articles')}}"><i class="fa fa-newspaper-o"></i>Articles</a>
                </li>
                <li class="{{strcmp($activeRoute,'admin_sliders')==0?'active-menu':''}}">
                    <a href="{{route('admin_sliders')}}"><i class="fa fa-sliders"></i> Slider</a>
                </li>


                <li class="{{strcmp($activeRoute,'admin_gallery')==0?'active-menu':''}}">
                    <a href="{{route('admin_gallery')}}"><i class="fa fa-picture-o"></i> Gallery</a>
                </li>

                <li class="{{strcmp($activeRoute,'admin_reports')==0?'active-menu':''}}">
                    <a href="{{route('admin_reports')}}"><i class="fa fa-edit"></i> डाउनलोदड्स  </a>
                </li>

                <li class="{{strcmp($activeRoute,'admin_members')==0?'active-menu':''}}">
                    <a href="{{route('admin_members')}}"><i class="fa fa-user "></i> वडा सदस्य​</a>
                </li>
                <li class="{{strcmp($activeRoute,'persons')==0?'active-menu':''}}">
                    <a href="{{route('persons')}}"><i class="fa fa-user "></i> टोल सदस्य​</a>
                </li>


                {{-- <li class="{{strcmp($activeRoute,'admin_kagajats')==0?'active-menu':''}}">
                    <a href="{{route('admin_kagajats')}}"><i class="fa fa-edit"></i> निवेदनको लागी कागजात </a>

                </li>
                <li class="{{strcmp($activeRoute,'admin_supports')==0?'active-menu':''}}">
                    <a href="{{route('admin_supports')}}"><i class="fa fa-edit"></i> निवेदनहरू </a>
                </li> --}}


                <li class="{{strcmp($activeRoute,'admin_gunaso')==0?'active-menu':''}}">
                    <a href="{{route('admin_gunaso')}}"><i class="fa fa-comment"></i> गुनासो  </a>
                </li>

                <li class="{{strcmp($activeRoute,'admin_users')==0?'active-menu':''}}">
                    <a href="{{route('admin_users')}}"><i class="fa fa-comment"></i> Users  </a>
                </li>


                <li >
                    <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                </li>
            </ul>


    </div>

</nav>

