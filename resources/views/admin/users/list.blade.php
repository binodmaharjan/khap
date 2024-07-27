@extends('admin.layout')
@section('page_title','All Users')
@section('header-title','Users')
@section('header-subtitle','All users')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin_user_add')}}">
            <button><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>

            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($user as $key => $data)

                <tr>
                    <td> {{ ++$counts }}</td>


                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>


                    <td>
                        <a href="#"
                           onclick="return confirm('Are you sure you want to delete this item?');">
                            <button><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </a>

                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

    {!! $user ->render() !!}



@endsection


