@extends('user.layout.app')
@section('page-title','३ नं. वडा कार्यालय | डाउनलोड्स')
@section('content')
       <div class="container">
    <!--<div class="breadcrumb"><a href="{{url('')}}">Home</a> » Contact</div>-->
      <div class="col-sm-12 widget_comments padding-clear padding-top">
               <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » डाउनलोड्स</div>
        </div>
</div>
       <section>
           <div class="container">
               <div class="row">
                   <div class="col-md-12">


                       <div class="col-md-9 widget-sidebar">
                           <div class="widget widget_comments noShadow">
                               <h3 class="widget-title">डाउनलोड्स </h3>
                               <div class="widget-inner staffSlider">
                                   <ul class="comment mainlinks downloads">

                                       @foreach($report as $report)
                                           <li>

                                               <a href="{{url('downloads/'.$report->path)}}"> <i class="fa fa-file-pdf-o pdfColor" aria-hidden="true"></i> {!! $report->title !!}</a>
                                               <br>
                                               {!! Patro::miti_YY_mm_dd($report->created_at) !!}
                                           </li>
                                           @endforeach

                                   </ul>
                               </div>
                           </div>
                       </div>

                       @include('user.layout.mainlink')

                   </div>
               </div>
           </div>

       </section>
       


@endsection