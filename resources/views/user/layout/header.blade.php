<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 logo-main">

                <div class="col-md-6 col-sm-12">
                <a href="{{route('main')}}" >    <img src="{{url('src/logo.png')}}" class="floatLeft image-one">
                    </a>
                    <h3 class="title-aside-logo">
                        <div class="title-small">ललितपुर महानगरपालिका </div>
                        <div class="title-big">  ३ नं. वडा कार्यालय </div>
                        <div class="title-small"> पुल्चोक, ललितपुर </div>
                        <div class="title-small"> ३ नं. प्रदेश, नेपाल</div>
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="pull-right header-calendar">मिती {!! Patro::current_miti() !!}
                        <br>
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