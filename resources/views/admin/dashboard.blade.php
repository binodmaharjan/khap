@extends('admin.layout')
@section('header-title','Dashboard')
@section('header-subtitle','Dashboard')
@section('content')
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Profit</h4>
                    <div class="easypiechart" id="easypiechart-blue" data-percent="82"><span class="percent">82%</span>
                        <canvas height="110" width="110"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Sales</h4>
                    <div class="easypiechart" id="easypiechart-orange" data-percent="55"><span class="percent">55%</span>
                        <canvas height="110" width="110"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Customers</h4>
                    <div class="easypiechart" id="easypiechart-teal" data-percent="84"><span class="percent">84%</span>
                        <canvas height="110" width="110"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>No. of Visits</h4>
                    <div class="easypiechart" id="easypiechart-red" data-percent="46"><span class="percent">46%</span>
                        <canvas height="110" width="110"></canvas></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                <div class="panel-left pull-left blue">
                    <i class="fa fa-eye fa-5x"></i>

                </div>
                <div class="panel-right">
                    <h3>16,150</h3>
                    <strong> Daily Visits</strong>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                <div class="panel-left pull-left blue">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                </div>

                <div class="panel-right">
                    <h3>25,550 </h3>
                    <strong> Sales</strong>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                <div class="panel-left pull-left blue">
                    <i class="fa fa fa-comments fa-5x"></i>

                </div>
                <div class="panel-right">
                    <h3>11,225 </h3>
                    <strong> Comments </strong>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder blue">
                <div class="panel-left pull-left blue">
                    <i class="fa fa-users fa-5x"></i>

                </div>
                <div class="panel-right">
                    <h3>72,525 </h3>
                    <strong>No. of Visits</strong>

                </div>
            </div>
        </div>
    </div>



@endsection