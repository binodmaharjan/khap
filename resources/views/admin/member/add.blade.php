@extends('admin.layout')
@section('page_title','Add new member')
@section('header-title','Members')
@section('header-subtitle','Add new member')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_member_store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Position</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="position" value="{{ old('position') }}" required autofocus>

                @if ($errors->has('position'))
                    <span class="help-block">
                        <strong>{{ $errors->first('position') }}</strong>
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
                        <strong>{{ $errors->first('phone') }}</strong>
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

        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>

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
                <input type="hidden" name="head" value="0">
                <input type="checkbox" name="head" value="1" > Head<br>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary">
                    Upload
                </button>
            </div>
        </div>
    </form>

@endsection
