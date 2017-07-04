@extends('admin.layout')

@section('page_title','All menus')
@section('header-title','Menus')
@section('header-subtitle','All Menus')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin_menu_add')}}" > <button ><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button></a>
    </div>



    <div class="table-responsive">
        <table class="table">

            <thead>
            <tr>
                <th>#</th>

                <th>Name</th>
                <th>Order</th>
                <th>Action</th>

            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>

            @foreach($menu as $key => $menu)


                <tr>
                    <td> {{ ++$counts }}</td>

                    <td><a href="{{route('admin_menu_edit',array($menu->id))}}"> {{$menu->name}}</a></td>
                    <td><a href="{{route('admin_menu_edit',array($menu->id))}}"> {{($menu->order)}}</a></td>
                    <td>
                         <a href="{{route('admin_menu_delete',array($menu->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection
