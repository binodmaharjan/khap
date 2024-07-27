@extends('admin.layout')
@section('page_title','Edit kagajat')
@section('header-title','Articles')
@section('header-subtitle','Edit kagajat')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_kagajat_update') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input id="name" type="hidden" class="form-control" name="id" value="{{ $kagajat->id }}" required autofocus>


        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Title</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="title" value="{{ $kagajat->title }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Description</label>


            <div class="col-md-10">

                <textarea name="description" cols="50" rows="20" class="form-control" value="{{ old('description') }}" >
                    @php echo htmlentities($kagajat->description) @endphp
                    {{--{!! $kagajat->description !!}--}}
                </textarea>


                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
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
