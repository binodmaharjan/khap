@extends('user.layout.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 padding-clear">
                    <div class=" padding-top">
                        <h3 class="heading-title-paragraph">Post your Form Here</h3>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('user_support_store') }}" enctype="multipart/form-data" style=" margin-top: 60px;">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label col-left">Full Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label col-left">Email</label>

                                <div class="col-md-6">
                                    <input id="name" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label col-left">Phone</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label col-left">Subject</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required autofocus>

                                    @if ($errors->has('subject'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('subject') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>







                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label col-left"> File</label>

                                <div class="col-md-6">
                                    <input type="file" name="file" id="file-1" data-multiple-caption="{count} files selected"  multiple="multiple">

                                    @if ($errors->has('file'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label col-left"></label>
                                <div class="col-md-5">
                                    <button type="submit" class="btn btn-primary" style=" margin-bottom: 60px;">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
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
            </div>
        </div>
    </section>

@endsection