<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 logo-main">

                <div class="col-md-2 col-sm-12">
                    <a href="{{route('main')}}" >    <img src="{{url('src/logo.png')}}" class="img-responsive image-one">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12">

                    <h3 class="title-aside-logo">
                        ललितपुर वडा कार्यालय<br> 
                        ३ वडा कार्यालय <br> 
                        पुल्चोक ल.पु.
                    </h3>
                </div>
                <div class="col-md-4">
                    <p class="pull-right header-calendar">मिती {!! Patro::current_miti() !!}
                        <br>

                        {{--<a data-toggle="modal" data-target="#loginbox">--}}
                            {{--फारम भर्नको लागी--}}
                        {{--</a>--}}

                        <a href="{{route('user_support_create')}}" >
                            फारम भर्नको लागी
                        </a>
                    </p>


                </div>
            </div>
        </div>
</section>