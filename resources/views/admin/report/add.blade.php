@extends('admin.layout')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_report_store') }}" enctype="multipart/form-data">
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

@section('header-title','Reports')
@section('header-subtitle','Add new report')