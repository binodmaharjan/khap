<?php

namespace App\Http\Controllers;

use App\Bhatta;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class BhattaController extends Controller
{
    //
    public function create(){
        $category =Category::all();


        return view('admin.bhatta.add',['category'=>$category]);
    }

    public function store(Request $request){



        $input = Input::only('file');




        $filename = $input['file']->store('xls');

        $path =storage_path('uploads/'.$filename);




        $data = Excel::load($path, function($reader) {

        })->get();

     //   dd($data);

        foreach ($data->toArray() as $row) {

            if(!empty($row['personal_id'])) {

                $vatta = new Bhatta();
                $vatta->name_nepali = $row['name_nepali'];
                $vatta->type = $row['social_assistance_type_name'];
                $vatta->ward = $row['ward_number'];
                $vatta->personalId = $row['personal_id'];
                $vatta->memberId = $row['member_id'];
                $vatta->memberName = $row['member_name'];
                $vatta->gender = $row['gender'];
                $vatta->age = $row['age'];
                $vatta->birthDate = $row['birth_date_bs'];
                $vatta->citizenship = $row['citizenship_number'];
               // $vatta->regularAmount = $row['regular_amount'];
               // $vatta->totalAmount = $row['total_amount'];
               // $vatta->medicalAmount = $row['medical_amount'];
                $vatta->save();
            }
//            dd($row);
        }



    }
}
