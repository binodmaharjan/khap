<section>
    <div class="container">
        <div class="row">
             <div class="col-md-12">
                
                 <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » {{$article->title}}</div>

                 <div class="col-md-9 widget-sidebar">
                     <div class="aboutUs postDetails">
                    <h3 class="heading-title-paragraph">{{$article->title}}</h3>
                    <div class="paragraph-link floatRight postDate">{!! Patro::miti($article->created_at) !!}</div>
                    <img alt="Title goes here"  src=" {{url('uploads/'.$article->feature_image)}}">
                   {!! $article->description !!}

                </div>
                 </div>

                 @include('user.layout.mainlink')
                  
             </div>
            </div> 
            </div>
          
</section>