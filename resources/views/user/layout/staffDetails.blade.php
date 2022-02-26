<section>
    <div class="container">
        <div class="row">

            <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » खपिन्छें टोल सुधार कमिटी</div>

            <div class="col-md-12">
                <div class="col-md-8 widget-sidebar padding-clear">
                <div class="widget widget_comments widget_latest_post noShadow">
                    <h3 class="widget-title">खपिन्छें टोल सुधार कमिटि</h3>
                    <div class="staffSlider">
                        @if($main_member)
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
                {{-- commitee --}}
                <div class="col-sm-12 ">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>समन्वय तथा निर्देशन कमिटी </h3>
                    </div>
                </div>

                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मोतिलाल महर्जन</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>जीवन अवाले </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>शुक्रराज महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>अमीर महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मनोज कुमार महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>न्याय तथा मेलमिलाप उपसमिति </h3>
                    </div>
                </div>

                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>तुल्सी महर्जन</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>शुक्रराज महर्जन </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>अमीर महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मनोज कुमार महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रत्न अवाले</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- tt --}}
                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>आर्थिक उपसमिति</h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>राजकुमार महर्जन</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>ज्ञानेन्द्र महर्जन</h3>
                                    <h4>सह संयोजक  </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>श्रीषण महर्जन </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>दिलिप महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मनोज कुमार महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>राकेश महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मनोज महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- 2 --}}
                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>भौतिक विकास निर्माण उपसमिति</h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>राजकुमार महर्जन</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>शुक्रराज महर्जन</h3>
                                    <h4>सह संयोजक  </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>अमीर महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>हेराकाजी महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>राजु महर्जन </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मनोज ब्यञ्जनकार</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रितेश महर्जन </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- 3 --}}
                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>साँस्कृतिक उपसमिति</h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रत्नपाल महर्जन</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>हरि महर्जन</h3>
                                    <h4>सह संयोजक  </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>बाबुरत्न महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रोशन महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मनोज महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>प्रशिष महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>राजन महर्जन </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- 4 --}}
                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>सुवाः ब्यवस्थापन उपसमिति </h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>राजु महर्जन</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>विद्यारत्न महर्जन</h3>
                                    <h4>सह संयोजक  </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मनोज महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>सानुलाल महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>कर्म महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>प्रेमलाल अवाले</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- 6 --}}

                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>विद्युत ब्यवस्थापन उपसमिति </h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>भुवन महर्जन</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>हेराकाजी महर्जन</h3>
                                    <h4>सह संयोजक  </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>आशाकाजी महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>मनोज कुमार ब्यञ्जनकार</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>ज्ञानेश्वर महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>प्रेमकृष्ण अवाले</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>बेखामान महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                {{-- 7 --}}
                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>स्वास्थ्य तथा वातावरण उपसमिति </h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>सुरज ब्यञ्जनकार</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>गोपाल महर्जन</h3>
                                    <h4>सह संयोजक  </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>कर्मलाल अवाले</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>गोविन्द महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>सानुछोरी महर्जन अवाले</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>

                {{-- 10 --}}
                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>युवा खेलकुद तथा शिक्षा उपसमिति</h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>ज्ञानेन्द्र महर्जन</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रोकेश अवाले</h3>
                                    <h4>दुजः  </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>कर्मलाल अवाले</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रविन्सन महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रुजन महर्जन </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>निश्चल अवाले</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>

                {{-- 11 --}}

                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>विधान संशोधन उपसमिति</h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>सुरज ब्यञ्जनकार</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>तुुल्सी महर्जन</h3>
                                    <h4>दुजः  </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>कृष्णमान ब्यञ्जनकार</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रविन्सन महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रत्न अवाले  </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>

                {{-- 12 --}}
                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>खपिन्छेँ वेभ साइट सञ्चालन उपसमिति </h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>सुरज ब्यञ्जनकार</h3>
                                    <h4>संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>हरि महर्जन</h3>
                                    <h4>सह संयोजक </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>राजकुुमार महर्जन</h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>विनोद महर्जन </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>रविन्सन महर्जन </h3>
                                    <h4>दुजः</h4>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>

                {{-- 15 --}}

                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one " style="border-bottom: 3px solid #e52b1e;">
                        <h3>ज्यापु समाज यल त्वाः प्रतिनीधि</h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>सबिना महर्जन</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>हरि महर्जन</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>सुनील महर्जन (शुक्रराज)</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>आपुलाल अवाले </h3>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>

                {{-- 133 --}}
                <div class="col-sm-12 widget_comments">
                    <div class="text-center-one" style="border-bottom: 3px solid #e52b1e;">
                        <h3>मंका सामान ब्यवस्थापन </h3>
                    </div>
                </div>
                <div class="col-md-12 widget_comments widget-sidebar padding-clear team">
                    <ul class="galleryList">
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>बेखामान महर्जन</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-responsive img-circle">
                                <img src="{{ url('src/profile.jpg')}}">
                                <div class="text-center-one staffDetails">
                                    <h3>कृष्ण महर्जन</h3>
                                </div>
                            </div>
                        </li>
                                                
                    </ul>
                </div>
                {{-- end of comitte --}}
            </div>
            @include('user.layout.mainlink')
        </div>
    </div>


</section>