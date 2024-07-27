<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » पदाधिकारी</div>

                <div class="col-md-9 widget-sidebar padding-clear">
                    <div class="widget widget_comments widget_latest_post noShadow">
                        <h3 class="widget-title">पदाधिकारी</h3>
                        <div class="staffSlider">


                            @if(count($main_member))
                                <div class="col-sm-12">

                                    <div class="img-responsive img-circle"> <img src="{{ !empty($main_member->path)?url('storage/'.$main_member->path):url('src/profile.jpg')}}">

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
                                        <div class="img-responsive img-circle">
                                            <img src="{{ !empty($member->path)?url('storage/'.$member->path):url('src/profile.jpg')}}">

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

              @include('user.layout.mainlink')

            </div>
        </div>
    </div>

</section>