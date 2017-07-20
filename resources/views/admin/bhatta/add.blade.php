@extends('admin.layout')
@section('page_title','Add new report')
@section('header-title','Reports')
@section('header-subtitle','Add new report')

@section('content')

    <form class="form-horizontal"
          role="form" method="POST"
          action="{{ route('admin_vatta_store') }}"

          enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>

            <div class="col-md-6">
                {{--<div class="dropzone dz-clickable">--}}
                {{--<input type="file" name = 'file' multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">--}}
                <input type="file" name="file" id="file-1" data-multiple-caption="{count} files selected"  multiple="multiple">
                {{--</div>--}}
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

