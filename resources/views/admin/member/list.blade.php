@extends('admin.layout')

@section('content')



    <div class="panel-heading">
        <a href="{{url('/member/add')}}" > <button ><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button></a>
    </div>



    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Position</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($member as $key => $member)


                <tr>
                    <td> {{ ++$counts }}</td>
                    <td><img src="{{asset('uploads/'.$member->path)}}" height="50px"></td>

                    <td><a href="{{url('member/'.$member->id.'/edit')}}"> {{$member->name}}</a></td>
                    <td><a href="{{url('member/'.$member->id.'/edit')}}"> {{$member->position}}</a></td>

                    <td><a href="{{url('member/'.$member->id.'/edit')}}"> {{$member->phone}}</a></td>

                    <td>
                         <a href="{{url('member/'.$member->id.'/delete')}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection

@section('header-title','Members')
@section('header-subtitle','All Members')