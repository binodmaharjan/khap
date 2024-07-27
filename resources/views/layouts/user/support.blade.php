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
                                            <select id="method-option" class="form-control" name ='subject' >


                                                <option name="method" value=""
                                                        data-content="बिषय छान्नुहोस "
                                                      >-- छान्नुहोस --
                                                </option>

                                                @if(!empty($kagajat))
                                                    @foreach($kagajat as $data)

                                                    <option name="method" value="{{$data->title }}"
                                                            data-content="{{ $data->description }}"
                                                           >{{$data->title }}
                                                    </option>
                                                    @endforeach

                                                    @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name" class="col-md-4 control-label">चाहिने कागजातहरू*</label>
                                        <div class="col-md-8">
                                        <label for="name" class="form-control  w3-border"  id="help-text"></label>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="name" class="col-md-4 control-label"> फाइल *</label>

                                        <div class="col-md-8">
                                            <input type="file" name="file[]" id="file-1"
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

                            </div>
                        </div>
                    </div>
                    @include('user.layout.mainlink')
                </div>
            </div>

        </div>

    </section>



@endsection


