@extends('admin.layout')
@section('page_title','All kagajats')
@section('header-title','Articles')
@section('header-subtitle','All kagajats')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin_kagajat_add')}}">
            <button><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($kagajat as $key => $data)

                <tr>
                    <td> {{ ++$counts }}</td>

                    <td><a href="{{route('admin_kagajat_edit',array($data->id))}}"> {{$data->title}}</a></td>


                    <td>
                        <a href="{{route('admin_kagajat_delete',array($data->id))}}"
                           onclick="return confirm('Are you sure you want to delete this item?');">
                            <button><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </a>
                        {{--<a href="{{route('admin_kagajat_delete',array($kagajat->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>--}}

                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

    {!! $kagajat ->render() !!}



@endsection


