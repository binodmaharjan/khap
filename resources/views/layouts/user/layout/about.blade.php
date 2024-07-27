
<?php $count =0 ?>
@foreach($homeArticle as $data)
    <?php $count++ ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 padding-top">
            <div class="col-md-8 padding-clear">
                <div class="aboutUs">
                    <h3 class="heading-title-paragraph">{!! $data->title !!}</h3>
                    {!! str_limit($data->description,  ($count==1)?400:4*400) !!} <span class="paragraph-link"><a href="{{route('article_slug',array('slug'=>$data->slug))}}">पुरा पढ्नुहोस</a></span>
                    </p>

                </div>
            </div>

                @if($count==1)

                @include('user.layout.mainlink')
                    @endif

            </div>
        </div>
    </div>
</section>

@endforeach

