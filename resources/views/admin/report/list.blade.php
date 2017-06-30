@extends('admin.layout')

@section('page_title','Reports')
@section('header-title','Reports')
@section('header-subtitle','Reports')

@section('content')



    <div class="panel-heading">
        <a href="{{route('admin_report_add')}}" > <button ><i class="fa fa-plus" aria-hidden="true"> </i> Add new</button></a>
    </div>



    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>

                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $counts = 0; ?>
            @foreach($report as $key => $report)

                <tr>
                    <td>{{++$counts}}</td>
                    <td><a href="{{route('admin_report_edit',array($report->id))}}"> {{$report->title}}</a></td>
                    <td><a href="{{route('admin_report_edit',array($report->id))}}">
                            @if($report->type==0){{"Annual Report"}}
                                @elseif($report->type==1){{"Publications"}}
                                @else{{"Notices"}}
                             @endif
                           </a></td>
                    <td>
                        <a href="{{asset('uploads/'.$report->path)}}" target="_blank"> <button ><i class="fa fa-download" aria-hidden="true"> </i> View</button></a>

                        <a href="{{url('downloads/'.$report->path)}}"> <button ><i class="fa fa-download" aria-hidden="true"> </i> Download</button></a>
                        <a href="{{route('admin_report_delete',array($report->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection

