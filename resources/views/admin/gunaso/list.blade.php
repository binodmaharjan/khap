@extends('admin.layout')

@section('page_title','All categories')
@section('header-title','Categories')
@section('header-subtitle','All Categories')

@section('content')

    <button class="clipboard" data-clipboard-text="{{route('gunaso')}}"><i
                class="fa fa-clipboard" aria-hidden="true">Copy link for menu</i></button>


    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Subject</th>
                <th>By</th>
                <th>Action</th>

            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($gunaso as $key => $gunaso)


                <tr>
                    <td> {{ ++$counts }}</td>

                    <td>
                         {{$gunaso->subject}}</td>
                    <td>{!! $gunaso->full_name !!}</td>
                    <td>
                         <a href="{{route('admin_gunaso_delete',array($gunaso->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection
