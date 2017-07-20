<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 padding-top">
            <div class="col-md-8 padding-clear">
                <div class="aboutUs">
                    <h3 class="heading-title-paragraph">{!! $homeArticle->title !!}</h3>
                    {!! str_limit($homeArticle->description, 4*400) !!} <span class="paragraph-link"><a href="{{route('article_slug',array('slug'=>$homeArticle->slug))}}">पुरा पढ्नुहोस</a></span>
                    </p>

                </div>
            </div>

                @include('user.layout.mainlink')

            </div>
        </div>
    </div>
</section>