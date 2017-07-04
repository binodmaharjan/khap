@extends('admin.layout')
@section('page_title','All support')
@section('header-title','Supports')
@section('header-subtitle','All supports')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin_article_add')}}" > <button ><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button></a>
    </div>



    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Subjet</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($support as $key => $support)


                <tr>
                    <td> {{ ++$counts }}</td>


                    <td> {{$support->name}}</td>
                    <td> {{$support->subject}}</td>
                    <td> {{$support->email}}</td>
                    <td> {{$support->phone}}</td>



                    <td>
                        <a href="{{url('downloads/'.$support->path)}}"> <button ><i class="fa fa-download" aria-hidden="true"> </i> Download</button></a>
                         <a href="{{route('admin_support_delete',array($support->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection
