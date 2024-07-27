<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 logo-main">

                <div class="col-md-4">
                <a href="{{route('main')}}" >    <img src="{{url('src/logo.png')}}" class="floatLeft image-one">
                    </a>
                    <h3 class="title-aside-logo">
                        <div class="title-small">ललितपुर महानगरपालिका </div>
                        <div class="title-big"> खपिन्छेँ टोल </div>
                        <div class="title-small"> खपिन्छेँ, ललितपुर </div>
                    </h3>
                </div>

                {{-- <div class="col-md-6">
                 <img src="{{url('src/clip.png')}}" class=""" width="100%" height="800px">
                </div> --}}

                <div class="col-md-2 right">

                    <div class="text-right" >
                   मिति {!! Patro::current_miti() !!}
                    {{--<a data-toggle="modal" data-target="#loginbox">--}}
                            {{--फारम भर्नको लागी--}}
                        {{--</a>--}}
                    </div>



                </div>
            </div>
        </div>
</section>