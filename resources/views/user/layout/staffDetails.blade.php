<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb"><a href="{{url('')}}">Home</a> » Staff Details</div>

                <div class="col-md-9 widget-sidebar padding-clear">
                    <div class="widget widget_comments widget_latest_post noShadow">
                        <h3 class="widget-title">पदाधिकारी</h3>
                        <div class="staffSlider">


                            @if(count($main_member))
                                <div class="col-sm-12">

                                    <div class="img-responsive img-circle"><img
                                                src="{{url('uploads/'.$main_member->path)}}">
                                        <div class="text-center-one staffDetails">
                                            <h3>{{$main_member->name}}</h3>
                                            <h4>{{$main_member->position}}</h4>
                                            <p><strong>{{$main_member->email}}</strong>
                                            <p>
                                            <p><strong>{{$main_member->phone}}</strong>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>

                    </div>


                    <div class="col-md-12 widget_comments widget-sidebar padding-clear team">

                        @if(count($member))
                            <ul class="galleryList">

                                @foreach($member as $member)
                                    <li>
                                        <div class="img-responsive img-circle"><img
                                                    src="{{url('uploads/'.$member->path)}}">
                                            <div class="text-center-one staffDetails">
                                                <h3>{{$member->name}}</h3>
                                                <h4>{{$member->position}}</h4>
                                                <p>{{$member->email}}<p>
                                                <p>{{$member->phone}}<p>
                                            </div>
                                        </div>
                                    </li>

                                @endforeach

                            </ul>

                        @endif
                    </div>
                </div>

                <div class="col-md-3 widget-sidebar">
                    <div class="widget widget_comments noShadow">
                        <h3 class="widget-title">Main Links</h3>
                        <div class="widget-inner staffSlider">
                            <ul class="comment mainlinks">
                                <li>
                                    <a href="#">link 1</a>
                                </li>
                                <li>
                                    <a href="#">link 1</a>
                                </li>
                                <li>
                                    <a href="#">link 1</a>
                                </li>
                                <li>
                                    <a href="#">link 1</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>