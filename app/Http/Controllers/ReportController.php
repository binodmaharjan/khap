<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function index()
    {
        $report=Report::all();

        return view('admin.report.list',['report' => $report]);
    }

    public function create(){
        return view('admin.report.add');
    }


}
