<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 padding-top">
                <div class="col-md-8 padding-clear">

                    <?php $count =0 ?>
                    @foreach($homeArticle as $data)
                        <?php $count++ ?>
                        <div class="aboutUs">
                            <h3 class="heading-title-paragraph">{!! $data->title !!}</h3>
                            <p>
                            {!! str_limit($data->description,  ($count==1)?2*400:4*400) !!} 
                            </p>

                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
             @include('user.layout.mainlink')
        </div>
    </div>
</section>
