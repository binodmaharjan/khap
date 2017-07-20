@extends('admin.layout')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_category_update') }}">
        {{ csrf_field() }}

        <input id="name" type="hidden" class="form-control" name="id"  value="{{ $category->id }}">


        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

     <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>
            <div class="col-md-5">
                <input type="hidden" name="menu" value="0">
                <input type="checkbox" name="menu" value="1" {{$category->menu ==1?'checked':''}} > Menu<br>
            </div>
        </div>



        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>

@endsection
@section('page_title','Edit member')
@section('header-title','Categories')
@section('header-subtitle','Edit category')