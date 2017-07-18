@extends('admin.layout')
@section('page_title','Edit article')
@section('header-title','Articles')
@section('header-subtitle','Edit article')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_article_update') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input id="name" type="hidden" class="form-control" name="id" value="{{ $article->id }}" required autofocus>


        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Title</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="title" value="{{ $article->title }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Slug</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="slug" value="{{ $article->slug }}" required autofocus>

                @if ($errors->has('slug'))
                    <span class="help-block">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Description</label>


            <div class="col-md-10">
                <textarea name="description" cols="50" rows="10" class="form-control" value="{{ old('description') }}" >@php echo htmlentities($article->description) @endphp   </textarea>

                {{--<input id="name" type="text" class="form-control" name="position" value="{{ old('position') }}" required autofocus>--}}

                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label col-left">Category</label>

            <div class="col-md-6">
                {{--<input id="name" type="text" class="form-control" name="category_id" value="{{ old('category_id') }}" required autofocus>--}}
                <select class="form-control" name ='category_id'>

                    @foreach($category as $category)
                        <option value="{{$category->id}}" {{$article->category_id==$category->id?'selected':''}}>{{$category->name}}</option>
                    @endforeach

                </select>
                {{--@if ($errors->has('phone'))--}}
                {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('phone') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>
            <div class="col-md-5">
                <input type="hidden" name="publish" value="0">
                <input type="checkbox" name="publish" value="1" {{$article->publish ==1?'checked':''}}> Publish<br>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>
            <div class="col-md-5">
                <input type="hidden" name="home_page" value="0">
                <input type="checkbox" name="home_page" value="1" {{$article->home_page ==1?'checked':''}}> Home page Article<br>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>
            <div class="col-md-5">
                <input type="hidden" name="main_link" value="0">
                <input type="checkbox" name="main_link" value="1" {{$article->main_link ==1?'checked':''}}>Is Main Link<br>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"></label>
            <div class="col-md-5">
                <input type="hidden" name="breaking_news" value="0">
                <input type="checkbox" name="breaking_news" value="1" {{$article->main_link ==1?'checked':''}}>Breaking News<br>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-4 control-label col-left"> Image</label>

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
