<section>
    <div class="container-fluid width-define">
        <div class="row">
            <div class="col-md-8 padding-clear">
                <div class="padding-top">
                    <h3 class="heading-title-paragraph">Gallery</h3>
                    <div class="custom-gallery-wraper ">


                        <ul class="first ">


                            <li>
                                <img alt="Title goes here"  src=" {{url('src/kids.jpg')}}">
                                <p class="text">What we have to show</p>
                            </li>
                            <li>
                                <img alt="Title goes here"  src=" {{url('src/kids.jpg')}}">
                                <p class="text">What we have to show</p>
                            </li>
                            <li>
                                <img alt="Title goes here"  src=" {{url('src/kids.jpg')}}">
                                <p class="text">What we have to show</p>
                            </li>
                            <li>
                                <img alt="Title goes here"  src=" {{url('src/kids.jpg')}}">
                                <p class="text">What we have to show</p>
                            </li>
                            <li>
                                <img alt="Title goes here"  src=" {{url('src/kids.jpg')}}">
                                <p class="text">What we have to show</p>
                            </li>
                            <li>
                                <img alt="Title goes here"  src=" {{url('src/kids.jpg')}}">
                                <p class="text">What we have to show</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4  widget-sidebar">
                <div class="widget widget_comments padding-top">
                    <div class="col-md-12 tab-wrapper">
                        <ul class="nav-tabs ">
                            <li class="active widget-title"><a data-toggle="tab" href="#notice">Annual Report</a></li>
                            <li class="widget-title"><a data-toggle="tab" href="#vacancy">Publication</a></li>
                            <li class="widget-title"><a data-toggle="tab" href="#info">Notice</a></li>
                        </ul>
                    </div>

                    <div class="widget-inner tab-content">
                        <div id="notice" class="tab-pane fade in active">
                            <ul class="comment"  style="margin-top: 40px;">

                                @if(count($annual_report))
                                    @foreach($annual_report as $report)
                                    <li>
                                        <a href="{{url('downloads/'.$report->path)}}">{{$report->title}}</a>
                                    </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>
                        <div id="vacancy" class="tab-pane fade ">
                            <ul class="comment"  style="margin-top: 40px;">

                                @if(count($publications))
                                    @foreach($publications as $report)
                                        <li>
                                            <a href="{{url('downloads/'.$report->path)}}">{{$report->title}}</a>
                                        </li>
                                    @endforeach
                                @endif



                            </ul>
                        </div>
                        <div id="info" class="tab-pane fade ">
                            <ul class="comment"  style="margin-top: 40px;">
                                @if(count($notice))
                                    @foreach($notice as $report)
                                        <li>
                                            <a href="{{url('downloads/'.$report->path)}}">{{$report->title}}</a>
                                        </li>
                                    @endforeach
                                @endif



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>