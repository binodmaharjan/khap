@extends('admin.layout')

@section('page_title','All gunaso')
@section('header-title','Gunaso')
@section('header-subtitle','All gunaso')

@section('content')




    <form class="form-horizontal" role="form" method="POST">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $gunaso->full_name}}" readonly required autofocus>

            </div>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Email</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $gunaso->email}}" readonly required autofocus>


            </div>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Phone</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $gunaso->phone }}" readonly required autofocus>


            </div>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Subject</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $gunaso->subject }}" readonly required autofocus>

            </div>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Complains</label>

            <div class="col-md-6">
                <textarea class="mceNoEditor" rows="20" readonly >{{$gunaso->message}}</textarea>


            </div>
        </div>





    </form>



@endsection
