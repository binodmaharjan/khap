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
                            <h3 class="widget-title">फारम भरेर बुझाउनुहोस  </h3>
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
                                            <input id="name" type="text" class="form-control" name="subject"
                                                   value="{{ old('subject') }}" required autofocus>

                                            @if ($errors->has('subject'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('subject') }}</strong>
                    </span>
                                            @endif
                                        </div>
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


{{--@extends('user.layout.app')--}}
{{--@section('content')--}}
{{--<section>--}}
{{--<div class="container-fluid width-define">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 padding-clear">--}}
{{--<div class=" padding-top">--}}
{{--<h3 class="heading-title-paragraph">Post your Form Here</h3>--}}
{{--<form class="form-horizontal" role="form" method="POST"--}}
{{--action="{{ route('user_support_store') }}" enctype="multipart/form-data"--}}
{{--style=" margin-top: 60px;">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
{{--<label for="name" class="col-md-4 control-label col-left">Full Name</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="name" type="text" class="form-control" name="name"--}}
{{--value="{{ old('name') }}" required autofocus>--}}

{{--@if ($errors->has('name'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('title') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="name" class="col-md-4 control-label col-left">Email</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="name" type="email" class="form-control" name="email"--}}
{{--value="{{ old('email') }}" required autofocus>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">--}}
{{--<label for="name" class="col-md-4 control-label col-left">Phone</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="name" type="text" class="form-control" name="phone"--}}
{{--value="{{ old('phone') }}" required autofocus>--}}

{{--@if ($errors->has('phone'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('title') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">--}}
{{--<label for="name" class="col-md-4 control-label col-left">Subject</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="name" type="text" class="form-control" name="subject"--}}
{{--value="{{ old('subject') }}" required autofocus>--}}

{{--@if ($errors->has('subject'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('subject') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}


{{--<div class="form-group">--}}
{{--<label for="name" class="col-md-4 control-label col-left"> File</label>--}}

{{--<div class="col-md-6">--}}
{{--<input type="file" name="file" id="file-1"--}}
{{--data-multiple-caption="{count} files selected" multiple="multiple">--}}

{{--@if ($errors->has('file'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('file') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<label for="name" class="col-md-4 control-label col-left"></label>--}}
{{--<div class="col-md-5">--}}
{{--<button type="submit" class="btn btn-primary" style=" margin-bottom: 60px;">--}}
{{--Submit--}}
{{--</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}


{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-4  widget-sidebar">--}}
{{--<div class="widget widget_comments padding-top">--}}
{{--<h3 class="widget-title">समाचार&#8203;</h3>--}}
{{--<div class="widget-inner">--}}
{{--<ul class="comment">--}}

{{--<li>--}}
{{--<a href="#">News One</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="#">News Two</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="#">News Three</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="#">News Four</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="#">News Five</a>--}}
{{--</li>--}}

{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}


{{--@endsection--}}


{{--@extends('user.layout.app')--}}
{{--@section('content')--}}
    {{--<div class="container">--}}
    {{--<!--<div class="breadcrumb"><a href="{{url('')}}">Home</a> » Contact</div>-->--}}
        {{--<div class="col-sm-12 widget_comments padding-clear padding-top">--}}
            {{--<div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » गुनासो</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<section id="contact" class='padding-top gunaso'>--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="about_our_company" style="margin-bottom: 20px;">--}}
                        {{--<h1 style="color:#fff;">Gunaso</h1>--}}
                        {{--<p style="color:#fff;">Please provide your comment</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6 col-md-offset-3">--}}

                        {{--<form class="form-horizontal" role="form" method="POST"--}}
                              {{--action="{{ route('user_support_store') }}" enctype="multipart/form-data"--}}
                              {{--style=" margin-top: 60px;">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                {{--<label for="name" class="col-md-4 control-label col-left">Full Name</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text" class="form-control" name="name"--}}
                                           {{--value="{{ old('name') }}" required autofocus>--}}

                                    {{--@if ($errors->has('name'))--}}
                                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('title') }}</strong>--}}
                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="name" class="col-md-4 control-label col-left">Email</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="email" class="form-control" name="email"--}}
                                           {{--value="{{ old('email') }}" required autofocus>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">--}}
                                {{--<label for="name" class="col-md-4 control-label col-left">Phone</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text" class="form-control" name="phone"--}}
                                           {{--value="{{ old('phone') }}" required autofocus>--}}

                                    {{--@if ($errors->has('phone'))--}}
                                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('title') }}</strong>--}}
                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">--}}
                                {{--<label for="name" class="col-md-4 control-label col-left">Subject</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text" class="form-control" name="subject"--}}
                                           {{--value="{{ old('subject') }}" required autofocus>--}}

                                    {{--@if ($errors->has('subject'))--}}
                                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('subject') }}</strong>--}}
                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label col-left"> File</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="file" name="file" id="file-1"--}}
                                           {{--data-multiple-caption="{count} files selected" multiple="multiple">--}}

                                    {{--@if ($errors->has('file'))--}}
                                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('file') }}</strong>--}}
                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label col-left"></label>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<button type="submit" class="btn btn-primary" style=" margin-bottom: 60px;">--}}
                                        {{--Submit--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{--<form name="sentMessage" id="contactForm" novalidate="" method="POST"--}}
                              {{--action="{{route('user_support_store')}}" enctype="multipart/form-data"--}}
                        {{-->--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input name="name" type="text" class="form-control"--}}
                                               {{--placeholder="Your full Name *" id="name" required=""--}}
                                               {{--data-validation-required-message="Please enter your name.">--}}
                                        {{--<p class="help-block text-danger"></p>--}}
                                    {{--</div>--}}
                                    {{--<div class="input-group form-group">--}}
{{--<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>--}}
{{--</span>--}}
                                        {{--<input name="email" type="email" class="form-control" placeholder="Your Email *"--}}
                                               {{--id="email" required=""--}}
                                               {{--data-validation-required-message="Please enter your email address.">--}}
                                        {{--<p class="help-block text-danger"></p>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="tel" name="phone" class="form-control" placeholder="Your Phone *"--}}
                                               {{--id="phone" required=""--}}
                                               {{--data-validation-required-message="Please enter your phone number.">--}}
                                        {{--<p class="help-block text-danger"></p>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="sub" name="subject" class="form-control" placeholder="Subject"--}}
                                               {{--id="subject" required=""--}}
                                               {{--data-validation-required-message="Please enter subject.">--}}
                                        {{--<p class="help-block text-danger"></p>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}

                                        {{--<div class="fileupload fileupload-new" data-provides="fileupload">--}}
{{--<span class="btn btn-primary btn-file"><span class="fileupload-new">Upload your file</span>--}}
{{--<span class="fileupload-exists">Change</span>--}}
{{--<input type="file" name="feature_image" id="file-1" data-multiple-caption="{count} files selected" multiple="multiple"></span>--}}
                                            {{--<span class="fileupload-preview"></span>--}}
                                            {{--<a href="#" class="close fileupload-exists" data-dismiss="fileupload"--}}
                                               {{--style="float: none">×</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="clearfix"></div>--}}
                                {{--<div class="col-lg-12 alignRight">--}}
                                    {{--<button type="submit" class="btn success btn-xl get">Submit</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</div>--}}


{{--@endsection--}}