@extends('admin.layout')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_menu_store') }}">
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

        <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Url Link</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="link" value="{{ old('link') }}" required autofocus>

                @if ($errors->has('link'))
                    <span class="help-block">
                        <strong>{{ $errors->first('link') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Order</label>

            <div class="col-md-6">
                <input id="name" type="number" class="form-control" name="order" value="{{ old('order') }}" required autofocus>

                @if ($errors->has('order'))
                    <span class="help-block">
                        <strong>{{ $errors->first('order') }}</strong>
                    </span>
                @endif
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
@section('page_title','Add new category')
@section('header-title','Categories')
@section('header-subtitle','Add new category')