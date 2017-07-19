@extends('user.layout.app')
@section('content')
    <div class="container">
    <!--<div class="breadcrumb"><a href="{{url('')}}">Home</a> » Contact</div>-->
        <div class="col-sm-12 widget_comments padding-clear padding-top">
            <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » फारम</div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="col-md-9 widget-sidebar">
                        <div class="widget widget_comments noShadow">
                            <h3 class="widget-title">फारम भरेर बुझाउनुहोस </h3>
                            <div class="widget-inner">

                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ route('user_support_store') }}" enctype="multipart/form-data"
                                      style=" margin-top: 60px;">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">पुरा नाम *</label>

                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control" name="name"
                                                   value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">ईमेल *</label>

                                        <div class="col-md-8">
                                            <input id="name" type="email" class="form-control" name="email"
                                                   value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">फोन *</label>

                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control" name="phone"
                                                   value="{{ old('phone') }}" required autofocus>

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">बिषय *</label>

                                        <div class="col-md-8">
                                            <select id="method-option" name="method" required>
                                                <option name="method" value="Choose method" data-content="The web, or email?" data-type="default" data-example="Choose your method">Choose method</option>
                                                <option name="method" value="email" data-content="Enter your website address below" data-type="email" data-example="e.g. stuff@yourdomain.com">Email</option>
                                                <option name="method" value="web" data-content="Enter your email below" data-type="web" data-example="e.g. www.yourdomain.com">Web</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name" class="col-md-4 control-label">चाहिने कागजातहरू</label>
                                        <label for="name" class="col-md-6 control-label" id="help-text"></label>


                                    </div>


                                    <div class="form-group">
                                        <label for="name" class="col-md-4 control-label"> फाइल *</label>

                                        <div class="col-md-8">
                                            <input type="file" name="file" id="file-1"
                                                   data-multiple-caption="{count} files selected" multiple="multiple">

                                            @if ($errors->has('file'))
                                                <span class="help-block">
                                           <strong>{{ $errors->first('file') }}</strong>
                                          </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name" class="col-md-4 control-label"></label>
                                        <div class="col-md-5">
                                            <button type="submit" class="btn btn-primary" style=" margin-bottom: 60px;">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>


                                {{--<ul class="comment mainlinks downloads">--}}

                                {{--@foreach($report as $report)--}}
                                {{--<li>--}}

                                {{--<a href="{{url('downloads/'.$report->path)}}"> <i class="fa fa-file-pdf-o pdfColor" aria-hidden="true"></i> {!! $report->title !!}</a>--}}
                                {{--<br>--}}
                                {{--{!! Patro::miti_YY_mm_dd($report->created_at) !!}--}}
                                {{--</li>--}}
                                {{--@endforeach--}}

                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                    @include('user.layout.mainlink')
                </div>
            </div>

        </div>

    </section>



@endsection


