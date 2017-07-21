@extends('admin.layout')
@section('page_title','Add new slider')
@section('header-title','Slider')
@section('header-subtitle','Add new photo')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_gallery_store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Title</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Description</label>

            <div class="col-md-6">
                <textarea name="desc" cols="50" rows="10" class="form-control" value="{{ old('desc') }}" ></textarea>
                {{--<input id="name" type="text" class="form-control" name="position" value="{{ old('position') }}" required autofocus>--}}

                @if ($errors->has('desc'))
                    <span class="help-block">
                        <strong>{{ $errors->first('desc') }}</strong>
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
                <button type="submit" class="btn btn-primary">
                    Upload
                </button>
            </div>
        </div>
    </form>

@endsection

