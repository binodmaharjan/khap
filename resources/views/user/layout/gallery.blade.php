<section>
    <div class="container">
        <div class="row">
             <div class="col-md-12">
            <div class="col-md-8 padding-clear">
                
                                        <ul class="nav-tabs noShadow otherTitles reports">
                            <li class='active'><a data-toggle="tab" href="#notice">Annual Report</a></li>
                            <li><a data-toggle="tab" href="#vacancy">Publication</a></li>
                            <li><a data-toggle="tab" href="#info">Notice</a></li>
                        </ul>
                         <div class="widget-inner widget_comments tab-content staffSlider">
                        <div id="notice" class="tab-pane fade in active widget-inner ">
                            <ul class="comment reportList" >
                                <li>
                                        <a href="#">a</a>
                                    </li>
                                     <li>
                                        <a href="#">a</a>
                                    </li>
                                     <li>
                                        <a href="#">a</a>
                                    </li>
                                     <li>
                                        <a href="#">a</a>
                                    </li>
                                     <li>
                                        <a href="#">a</a>
                                    </li>
                                     <li>
                                        <a href="#">a</a>
                                    </li>
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
                            <ul class="comment reportList">
                                  <li>
                                        <a href="#">b</a>
                                    </li>
                                      <li>
                                        <a href="#">b</a>
                                    </li>
                                      <li>
                                        <a href="#">b</a>
                                    </li>
                                      <li>
                                        <a href="#">b</a>
                                    </li>
                                      <li>
                                        <a href="#">b</a>
                                    </li>
                                      <li>
                                        <a href="#">b</a>
                                    </li>
                                      <li>
                                        <a href="#">b</a>
                                    </li>
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
                            <ul class="comment reportList" >
                                  <li>
                                        <a href="#">c</a>
                                    </li>
                                     <li>
                                        <a href="#">c</a>
                                    </li>
                                     <li>
                                        <a href="#">c</a>
                                    </li>
                                     <li>
                                        <a href="#">c</a>
                                    </li>
                                     <li>
                                        <a href="#">c</a>
                                    </li>
                                     <li>
                                        <a href="#">c</a>
                                    </li>
                                     <li>
                                        <a href="#">c</a>
                                    </li>
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
             <!--   <div class="padding-top">
                    <h3 class="otherTitles noShadow">Gallery</h3>
                    <div class="custom-gallery-wraper gallaryOverflow">


                        <ul class="first">


                            <li>
                                <img alt="Title goes here"  src=" {{url('src/kids.jpg')}}">
                                <p class="text">a</p>
                            </li>
                            <li>
                                <img alt="Title  here"  src=" {{url('src/kids.jpg')}}">
                                <p class="text">b</p>
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
                </div> -->
            </div>
            <div class="col-md-4 widget-sidebar padding-top ">
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
                                  <li>
                                    <a href="#">link 1</a>
                                </li>
                                

                            @if(count($news))
                                @foreach($news as $news)
                                <li>
                                    <a href="#">{{$news->title}}</a>
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
    </div>
</section>