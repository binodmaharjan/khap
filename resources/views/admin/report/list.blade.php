@extends('admin.layout')

@section('content')



    <div class="panel-heading">
        <a href="{{url('/reports/add')}}" > <button ><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button></a>
    </div>



    <div class="table-responsive">
        <table class="table">

            <tbody>
            <?php $counts = 0; ?>
            @foreach($report as $key => $report)

                <tr>
                    <td>{{++$counts}}</td>
                    <td><a href="{{url('reports/'.$report->id.'/edit')}}"> {{$report->title}}</a></td>
                    <td>
                        <a href="{{url('downloads/'.$report->path)}}"> <button ><i class="fa fa-download" aria-hidden="true"> </i> Download</button></a>
                        <a href="{{url('reports/'.$report->id.'/delete')}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection

@section('header-title','Reports')
@section('header-subtitle','Reports')