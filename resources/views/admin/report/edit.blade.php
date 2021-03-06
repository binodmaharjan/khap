@extends('admin.layout')
@section('page_title','Edit report')
@section('header-title','Reports')
@section('header-subtitle','Edit report')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_report_update') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input id="name" type="hidden" class="form-control" name="id" value="{{$report->id}}">

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Title</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="title" value="{{$report->title}}" required autofocus>

                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Keywords</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="keywords" value="{{ $report->keywords }}" placeholder="for searching by keywords" required autofocus>

                @if ($errors->has('keywords'))
                    <span class="help-block">
                        <strong>{{ $errors->first('keywords') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Type</label>

            <div class="col-md-6">
                {{--<input id="name" type="text" class="form-control" name="category_id" value="{{ old('category_id') }}" required autofocus>--}}
                <select class="form-control" name ='type' >
                    <option value="0" {{$report->type==0?'selected':''}} >Annual Report</option>
                    <option value="1" {{$report->type==1?'selected':''}} >Publications</option>
                    <option value="2" {{$report->type==2?'selected':''}} >Notices</option>
                </select>

            </div>
        </div>


            <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>

            <div class="col-md-6">
                <input type="file" name="file" id="file-1" data-multiple-caption="{count} files selected"  multiple="multiple" >

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
