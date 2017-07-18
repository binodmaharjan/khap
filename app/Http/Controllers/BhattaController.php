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

        foreach ($data->toArray() as $row) {

            if(!empty($row['personal_id'])) {

                $vatta = new Bhatta();
                $vatta->type = $row['social_assistance_type_name'];
                $vatta->ward = $row['ward_number'];
                $vatta->personalId = $row['personal_id'];
                $vatta->memberId = $row['member_id'];
                $vatta->memberName = $row['member_name'];
                $vatta->gender = $row['gender'];
                $vatta->age = $row['age'];
                $vatta->birthDate = $row['birth_date_bs'];
                $vatta->citizenship = $row['citizenship_number'];
                $vatta->regularAmount = $row['regular_amount'];
                $vatta->totalAmount = $row['total_amount'];
                $vatta->medicalAmount = $row['medical_amount'];
                $vatta->save();
            }
//            dd($row);
        }






//        $article =new Bhatta();
//        $article->title = $input['title'];
//        $article->description = $input['description'];
//        $article->category_id = $input['category_id'];
//        $article->publish = $input['publish'];
//        $article->slug=Str::slug($input['slug']);
//
//        if(!empty($input['feature_image'])) {
//            $filename = $input['feature_image']->store('features');
//            $article->feature_image=$filename;
//        }
//
//        $article->home_page=$input['home_page'];
//        $article->main_link=$input['main_link'];
//        $article->breaking_news=$input['breaking_news'];
//        $article->save();

      //  return redirect()->route('admin_articles')->with('status', 'New article successfully added.');

    }
}
