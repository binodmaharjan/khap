<section class="background-colorr" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="navbar">
                    <nav class="navbar navbar-default navbar-static-top nave-bar-bottom " role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-collapse-1">


                           @php
                               $activeRoute = \Illuminate\Support\Facades\Route::currentRouteName()
                           @endphp


                            <ul class="nav navbar-nav nav-hover main-menu">
                                <li><a href="{{url('')}}" class="{{ ($activeRoute=='main')?'active':''}}">गृहपृष्ठ</a></li>

                                @if(!empty($menu))
                                @foreach($menu as $menu)
                                    <li><a href="{{$menu->link}}" class="{{ (strcmp($menu->link,url(Request::path()))==0)?'active':''}}">{{$menu->name}}</a></li>
                                    @endforeach

                                @endif

                                 {{--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">हाम्रो बारेमा <b class="caret"></b></a>--}}
                                    {{--<ul class="dropdown-menu">--}}
                                        {{--<li class=""><a href="{{route('news')}}">Nationa News</a></li>--}}
                                        {{--<li><a href="#">Internation News</a></li>--}}
                                        {{--<li><a href="#">Today's Market</a></li>--}}
                                        {{--<li><a href="#">Entertainment</a></li>--}}
                                        {{--<li><a href="#">Flash News </a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">हाम्रो बारेमा </a></li>--}}
                                {{--<li><a href="#">जनसङ्ख्या </a></li>--}}
                                {{--<li><a  href="{{route('gallery')}}"></a></li>--}}

                                {{--<li><a href="{{route('user_support_create')}}">सम्पर्क</a></li>--}}
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>