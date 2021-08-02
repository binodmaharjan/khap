@extends('admin.layout')
@section('page_title','All articles')
@section('header-title','Articles')
@section('header-subtitle','All articles')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin.persons.add')}}">
            <button><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Family</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($persons as $key => $data)

                <tr>
                    <td> {{ ++$counts }}</td>
                    {{-- <td>
                        @if(!empty($data->feature_image))
                        <img src="{{url('storage/'.$data->feature_image)}}" height="50px">
                    @else
                            <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                        @endif
                    </td> --}}

                    <td><a href="{{route('admin.persons.edit',array($data->id))}}"> {{$data->name}}</a></td>
                    <td><a href="{{route('admin.persons.edit',array($data->id))}}"> {{$data->Age()}}</a></td>
                    <td><a href="{{route('admin.persons.edit',array($data->id))}}"> {{$data->phone}}</a></td>
                    <td><a href="{{route('admin.persons.edit',array($data->id))}}"> {{$data->email}}</a></td>
                    <td><a href="{{route('admin.persons.edit',array($data->id))}}"> {{$data->RelativeNames()}}</a></td>

                    <td>
                        <a href="{{route('admin.persons.show', $data->id)}}">
                            <button><i class="fa fa-info" aria-hidden="true"> </i> Details</button>
                        </a>
                        <a href="{{route('admin.persons.add.family', $data->id)}}">
                            <button><i class="fa fa-plus" aria-hidden="true"> </i> Add Family</button>
                        </a>

                        <a href="{{route('admin.persons.delete',array($data->id))}}"
                            onclick="return confirm('Are you sure you want to delete this item?');">
                        <button><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </a>
                        {{-- <a href="{{route('admin.persons.delete',array($article->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a> --}}
                        {{-- <a>
                            <button class="clipboard" data-clipboard-text="{{route('article_slug',array('id'=>$data->slug))}}"><i
                                        class="fa fa-clipboard" aria-hidden="true">Copy link</i></button>
                        </a> --}}
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

    {!! $persons ->render() !!}



@endsection


