<section>
    <div class="container">
        <div class="row">
             <div class="col-md-12">
                
                 <div class="breadcrumb"><a href="{{url('')}}">Home</a> » Post Name</div>

                 <div class="col-md-9 widget-sidebar">
                     <div class="aboutUs postDetails">
                    <h3 class="heading-title-paragraph">{{$article->title}}</h3>
                    <div class="paragraph-link floatRight postDate">{!! Patro::miti($article->created_at) !!}</div>
                    <img alt="Title goes here"  src=" {{url('uploads/'.$article->feature_image)}}">
                   {!! $article->description !!}

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

                        </ul>
                    </div>
                </div>
                </div>
                  
             </div>
            </div> 
            </div>
          
</section>