@extends('admin.layout')

@section('content')

    <div class="table-responsive">
        <table class="table">

            <tbody>

            @foreach($report as $key => $report)

                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$report->title}}</td>
                    <td>
                        <button ><i class="fa fa-download" aria-hidden="true"> </i> Download</button>
                        <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </td>

                </tr>

            @endforeach





            </tbody>
        </table>
    </div>



@endsection

@section('header-title','Reports')
@section('header-subtitle','Reports')