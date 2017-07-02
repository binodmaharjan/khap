@extends('admin.layout')
@section('page_title','All articles')
@section('header-title','Articles')
@section('header-subtitle','All articles')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin_article_add')}}">
            <button><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Feature</th>
                <th>Publish</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($article as $key => $article)

                <tr>
                    <td> {{ ++$counts }}</td>
                    <td><img src="{{asset('uploads/'.$article->feature_image)}}" height="50px"></td>

                    <td><a href="{{route('admin_article_edit',array($article->id))}}"> {{$article->title}}</a></td>
                    <td>
                        <a href="{{route('admin_article_edit',array($article->id))}}"> {{$article->publish == 1?'true':'false'}}</a>
                    </td>

                    <td><a href="{{route('admin_article_edit',array($article->id))}}"> {{$article->category->name}}</a>
                    </td>

                    <td>
                        <a href="{{route('admin_article_delete',array($article->id))}}"
                           onclick="return confirm('Are you sure you want to delete this item?');">
                            <button><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </a>
                        {{--<a href="{{route('admin_article_delete',array($article->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>--}}
                        <a>
                            <button class="clipboard" data-clipboard-text="{{route('article_post',array('id'=>$article->id))}}"><i
                                        class="fa fa-clipboard" aria-hidden="true">Copy link</i></button>
                        </a>
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>



@endsection


