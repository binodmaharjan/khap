@extends('admin.layout')

@section('page_title','All categories')
@section('header-title','Categories')
@section('header-subtitle','All Categories')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin_category_add')}}" > <button ><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button></a>
    </div>



    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>

                <th>Name</th>
                <th>Menu</th>
                <th>Action</th>

            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($category as $key => $category)


                <tr>
                    <td> {{ ++$counts }}</td>

                    <td><a href="{{route('admin_category_edit',array($category->id))}}"> {{$category->name}}</a></td>
                    <td><a href="{{route('admin_category_edit',array($category->id))}}"> {{($category->menu==1)?'true':'false'}}</a></td>
                    <td>
                         <a href="{{route('admin_category_delete',array($category->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection
