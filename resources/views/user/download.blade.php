@extends('user.layout.app')
@section('page-title','३ नं. वडा कार्यालय | डाउनलोडहरू')
@section('content')
    <div class="container">
    <!--<div class="breadcrumb"><a href="{{url('')}}">Home</a> » Contact</div>-->
        <div class="col-sm-12 widget_comments padding-clear padding-top">
            <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » डाउनलोडहरू</div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="col-md-8 widget-sidebar">
                        <div class="widget widget_comments noShadow">
                            <h3 class="widget-title">डाउनलोडहरू </h3>
                            <br>

                          
<br>

                            <div class="widget-inner ">
                                <ul class="comment mainlinks downloads">

                                    @foreach($report as $data)
                                        <li>

                                            <a href="{{url('downloads/'.$data->path)}}"> <i
                                                        class="fa fa-file-pdf-o pdfColor"
                                                        aria-hidden="true"></i> {!! $data->title !!}</a>
                                            <br>
                                            {!! Patro::miti_YY_mm_dd($data->created_at) !!}
                                        </li>
                                    @endforeach

                                </ul>

                                {!! $report->render() !!}
                            </div>
                        </div>
                    </div>

                    @include('user.layout.mainlink')

                </div>
            </div>
        </div>

    </section>



@endsection
