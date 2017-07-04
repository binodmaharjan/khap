@extends('admin.layout')
@section('header-title','Dashboard')
@section('header-subtitle','Dashboard')
@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-xs-6 col-md-3">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body easypiechart-panel">--}}
                    {{--<h4>Profit</h4>--}}
                    {{--<div class="easypiechart" id="easypiechart-blue" data-percent="82"><span class="percent">82%</span>--}}
                        {{--<canvas height="110" width="110"></canvas></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-md-3">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body easypiechart-panel">--}}
                    {{--<h4>Sales</h4>--}}
                    {{--<div class="easypiechart" id="easypiechart-orange" data-percent="55"><span class="percent">55%</span>--}}
                        {{--<canvas height="110" width="110"></canvas></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-md-3">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body easypiechart-panel">--}}
                    {{--<h4>Customers</h4>--}}
                    {{--<div class="easypiechart" id="easypiechart-teal" data-percent="84"><span class="percent">84%</span>--}}
                        {{--<canvas height="110" width="110"></canvas></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-md-3">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body easypiechart-panel">--}}
                    {{--<h4>No. of Visits</h4>--}}
                    {{--<div class="easypiechart" id="easypiechart-red" data-percent="46"><span class="percent">46%</span>--}}
                        {{--<canvas height="110" width="110"></canvas></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div><!--/.row-->--}}


    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                <div class="panel-left pull-left blue">
                    <i class="fa fa-newspaper-o fa-5x"></i>

                </div>
                <div class="panel-right">
                    <h3>{{count($articles)}}</h3>
                    <strong> Articles</strong>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                <div class="panel-left pull-left blue">
                    <i class="fa fa-th-list fa-5x"></i>
                </div>

                <div class="panel-right">
                    <h3>{{count($category)}} </h3>
                    <strong>  Categories</strong>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                <div class="panel-left pull-left blue">
                    <i class="fa fa fa-sliders fa-5x"></i>

                </div>
                <div class="panel-right">
                    <h3>{{count($slider)}} </h3>
                    <strong> Sliders </strong>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                <div class="panel-left pull-left blue">
                    <i class="fa fa-picture-o  fa-5x"></i>

                </div>
                <div class="panel-right">
                    <h3>{{count($gallery)}}  </h3>
                    <strong>Galleries</strong>

                </div>
            </div>
        </div>
    </div>



@endsection