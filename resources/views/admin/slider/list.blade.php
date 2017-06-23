@extends('admin.layout')

@section('content')



    <div class="panel-heading">
        <a href="{{url('/slider/add')}}" > <button ><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button></a>
    </div>



    <div class="table-responsive">
        <table class="table">

            <tbody>
            <?php $counts = 0; ?>

            @foreach($slider as $key => $slider)


                <tr>
                    <td> {{ ++$counts }}</td>
                    <td><img src="{{asset('uploads/'.$slider->path)}}" height="50px"></td>
                    <td><a href="{{url('slider/'.$slider->id.'/edit')}}"> {{$slider->title}}</a></td>
                    <td>
                        <a href="{{url('downloads/'.$slider->path)}}"> <button ><i class="fa fa-download" aria-hidden="true"> </i> Download</button></a>
                        <a href="{{url('slider/'.$slider->id.'/delete')}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection

@section('header-title','Slider')
@section('header-subtitle','slider')