
@if(!empty($breaking_news))

<section>
    <div class="container" style="
    margin-top: 18px;
">
        <div class="row">
            <div class="latest-update col-md-2 no-padding">
                <h3>सुचनाहरु   <img src="{{url('src/new.png')}}" class="img-responsive image-one floatLeft newTag">
</h3>
            </div>
            <div class="col-md-10 latest-post-list no-padding">
                <div class="marquee-top" role="alert">
                    <marquee>
                        <div class="breaking-news">

                            @foreach($breaking_news as $news)
                                <a href="{{route('article_post',array('id'=>$news->id))}}">{!! $news->title !!}</a>
                                @endforeach


                        </div></marquee>
                </div>
            </div>
        </div>
    </div>
</section>

    @endif