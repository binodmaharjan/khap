@extends('admin.layout')
@section('page_title','Add new member')
@section('header-title','Members')
@section('header-subtitle','Add new member')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.persons.update') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $person->name }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('name_np') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Name in Nepali</label>

            <div class="col-md-6">
                <input id="name_np" type="text" class="form-control" name="name_np" value="{{ $person->name_np}}" required autofocus>

                @if ($errors->has('name_np'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name_np') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
            <label for="age" class="col-md-4 control-label col-left">Age</label>

            <div class="col-md-6">
                <input id="age" type="number" class="form-control" name="age" value="{{ $person->Age() }}" required autofocus>

                @if ($errors->has('age'))
                    <span class="help-block">
                        <strong>{{ $errors->first('age') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label col-left">Address</label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control" name="address" value="{{ $person->address }}" required autofocus>

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group ">
            <label for="email" class="col-md-4 control-label col-left">Gender</label>

            <div class="col-md-6">
                <select name="gender" id="gender" class="form-control">
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>
        </div>



        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="phone" class="col-md-4 control-label col-left">Phone</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ $person->phone }}" required autofocus>

                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label col-left">Email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ $person->email }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('health') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Health</label>

            <div class="col-md-6">
                <input id="health" type="text" class="form-control" name="health" value="{{ $person->health }}" required autofocus>

                @if ($errors->has('health'))
                    <span class="help-block">
                        <strong>{{ $errors->first('health') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
            <label for="education" class="col-md-4 control-label col-left">Education</label>

            <div class="col-md-6">
                <input id="education" type="email" class="form-control" name="education" value="{{ $person->education }}" required autofocus>

                @if ($errors->has('education'))
                    <span class="help-block">
                        <strong>{{ $errors->first('education') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
            <label for="occupation" class="col-md-4 control-label col-left">Occupation</label>

            <div class="col-md-6">
                <input id="occupation" type="text" class="form-control" name="occupation" value="{{ $person->occupation  }}" required autofocus>

                @if ($errors->has('occupation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('occupation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <input id="person_id" type="hidden" class="form-control" name="person_id" value="{{ $person->id  }}" required autofocus >

        

        

        

        <div class="form-group">
            <label for="feature_image" class="col-md-4 control-label col-left"> Image</label>

            <div class="col-md-6">
                <input type="file" name="feature_image" id="file-1" data-multiple-caption="{count} files selected"  multiple="multiple">

                @if ($errors->has('feature_image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('feature_image') }}</strong>
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
