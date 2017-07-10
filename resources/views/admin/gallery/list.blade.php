@extends('admin.layout')
@section('page_title','Slider')
@section('header-title','Slider')
@section('header-subtitle','slider')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin_gallery_add')}}" > <button ><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button></a>

        <button class="clipboard" data-clipboard-text="{{route('gallery')}}"><i
                    class="fa fa-clipboard" aria-hidden="true">Copy link for menu</i></button>
    </div>



    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $counts = 0; ?>

            @foreach($slider as $key => $slider)


                <tr>
                    <td> {{ ++$counts }}</td>
                    <td><img src="{{URL::to('storage/'.$slider->path)}}" height="50px"></td>
                    <td><a href="{{route('admin_gallery_edit',array($slider->id))}}"> {{$slider->title}}</a></td>
                    <td>
                        <a href="{{url('downloads/'.$slider->path)}}"> <button ><i class="fa fa-download" aria-hidden="true"> </i> Download</button></a>
                        <a href="{{route('admin_gallery_delete',array($slider->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection

