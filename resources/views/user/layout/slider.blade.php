<section id="category-post-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="col-md-8 padding-clear">

                        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line carosel-slider-top" data-ride="carousel" data-pause="hover" data-interval="5000">
                            <!-- Indicators 
                            <ol class="carousel-indicators">

                               @if(count($slider))
                                @for( $key=0;$key<count($slider);$key++)
                                    <li data-target="#bootstrap-touch-slider" data-slide-to="{{$key}}" class="{{$key==0 ? 'active':''}}"></li>
                                   @endfor

                                   @endif


                            </ol>-->

                            <!-- Wrapper For Slides -->
                            <div id="bootstrap-touch-slider" role="listbox">

                                    <div class="item active" >

                                        <!-- Slide Background -->
                                        <img src="{{url('src/kids.jpg')}}" alt="Bootstrap Touch Slider" class="slide-image">
                                        <div class="bs-slider-overlay"></div>

                                        <div class="container">
                                            <div class="row">
                                                <!-- Slide Text Layer -->
                                                <div class="slide-text slide_style_left">
                                                    <h1 data-animation="animated zoomInRight" class="">title 1</h1>
                                                   <p data-animation="animated fadeInLeft" class=""> The deer herds in Shuklaphanta National Park, Kanchapur. Photo by Sher Badhur Singh  </p>
                                                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated bounceInUp">select one</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="item" >

                                        <!-- Slide Background -->
                                        <img src="{{url('src/kids.jpg')}}" alt="Bootstrap Touch Slider" class="slide-image">
                                        <div class="bs-slider-overlay"></div>

                                        <div class="container">
                                            <div class="row">
                                                <!-- Slide Text Layer -->
                                                <div class="slide-text slide_style_left">
                                                    <h1 data-animation="animated zoomInRight" class="">title 2</h1>
                                                   <p data-animation="animated fadeInLeft" class=""> The deer herds in Shuklaphanta National Park, Kanchapur. Photo by Sher Badhur Singh  </p>
                                                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated bounceInUp">select one</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                             <div class="item" >

                                        <!-- Slide Background -->
                                        <img src="{{url('src/kids.jpg')}}" alt="Bootstrap Touch Slider" class="slide-image">
                                        <div class="bs-slider-overlay"></div>

                                        <div class="container">
                                            <div class="row">
                                                <!-- Slide Text Layer -->
                                                <div class="slide-text slide_style_left">
                                                    <h1 data-animation="animated zoomInRight" class="">title 3</h1>
                                                   <p data-animation="animated fadeInLeft" class=""> The deer herds in Shuklaphanta National Park, Kanchapur. Photo by Sher Badhur Singh  </p>
                                                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated bounceInUp">select one</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                        <div class="item" >

                                        <!-- Slide Background -->
                                        <img src="{{url('src/kids.jpg')}}" alt="Bootstrap Touch Slider" class="slide-image">
                                        <div class="bs-slider-overlay"></div>

                                        <div class="container">
                                            <div class="row">
                                                <!-- Slide Text Layer -->
                                                <div class="slide-text slide_style_left">
                                                    <h1 data-animation="animated zoomInRight" class="">title 4</h1>
                                                   <p data-animation="animated fadeInLeft" class=""> The deer herds in Shuklaphanta National Park, Kanchapur. Photo by Sher Badhur Singh  </p>
                                                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated bounceInUp">select one</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                            </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div> <!-- End  bootstrap-touch-slider Slider -->
                    </div>

                    @include('user.layout.member')

            </div>
        </div>
    </div>
</section>