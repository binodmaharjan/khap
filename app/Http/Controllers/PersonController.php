<?php

namespace App\Http\Controllers;

use App\Family;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PersonController extends Controller
{
    public function __construct()
    {
          $this->middleware('auth', ['except' => ['post']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons=Person::OrderBy('updated_at','DESC')->paginate(20);
        return view('admin.person.list',['persons'=>$persons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.person.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);

        $this->validate($request, [
            'name' => 'required|max:255|',
            'name_np' => 'required|max:255|',
            'address'=>'required',
            'email' => 'required',
            'phone' => 'required',
            'age'=>'required',
            'gender'=>'required',
            'occupation'=>'required',
            'education'=>'required',
            'health'=>'required',

        ]);

        $person = new Person;
        $person->name = $request->name;
        $person->name_np = $request->name_np;
        $person->address = $request->address;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->birth_date = $request->age;

        $person->gender = $request->gender;
        $person->occupation = $request->occupation;
        $person->health = $request->health;
        $person->education = $request->education;
        $person->save();

        return redirect()->route('admin.persons')->with('status', 'New article successfully added.'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::findOrfail($id);
        return view('admin.person.show',compact('person'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $person = Person::findOrfail($id);
        return view('admin.person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|',
            'name_np' => 'required|max:255|',
            'address'=>'required',
            'email' => 'required',
            'phone' => 'required',
            'age'=>'required',
            'gender'=>'required',
            'occupation'=>'required',
            'education'=>'required',
            'health'=>'required',

        ]);

        $person = Person::findOrfail($request->person_id);

        $person->name = $request->name;
        $person->name_np = $request->name_np;
        $person->address = $request->address;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->birth_date = $request->age;

        $person->gender = $request->gender;
        $person->occupation = $request->occupation;
        $person->health = $request->health;
        $person->education = $request->education;
        $person->save();

        return redirect()->route('admin.persons')->with('status', 'Member successfully updated.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::findOrfail($id);
        $person->delete();
        return redirect()->route('admin.persons')->with('status', 'Member successfully deleted.'); 
    }

    public function AddFamily($person_id)
    {
        $person = Person::findOrfail($person_id);
        return view('admin.person.add', compact('person'));
    }

    public function StoreFamily(Request $request, $person_id)
    {
        $family = Person::findOrfail($person_id);

        $this->validate($request, [
            'name' => 'required|max:255|',
            'name_np' => 'required|max:255|',
            'address'=>'required',
            'email' => 'required',
            'phone' => 'required',
            'age'=>'required',
            'gender'=>'required',
            'occupation'=>'required',
            'education'=>'required',
            'health'=>'required',

        ]);

        $person = new Person;
        $person->name = $request->name;
        $person->name_np = $request->name_np;
        $person->address = $request->address;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->birth_date = $request->age;

        $person->gender = $request->gender;
        $person->occupation = $request->occupation;
        $person->health = $request->health;
        $person->education = $request->education;
        $person->save();

        // $new_family = new Family();
        // $new_family->person_id = $family->id;
        // $new_family->relative_id  = $person->id;
        // $new_family->save();

        // foreach($family->family as $relative)
        // {
        //     $new_family = new Family();
        //     $new_family->person_id = $relative->relative_id;
        //     $new_family->relative_id  = $person->id;
        //     $new_family->save();
            
        // }

        $family_ids = $family->family->pluck('relative_id')->toArray();
        $all_family_id = array_unique(array_merge(array($family->id), $family_ids));
        foreach($all_family_id as $relative_id)
        {
            $new_family = new Family();
            $new_family->person_id = $relative_id;
            $new_family->relative_id  = $person->id;
            $new_family->save();
            // reverse relation is also true
            $new_family = new Family;
            $new_family->relative_id = $relative_id;
            $new_family->person_id  = $person->id;
            $new_family->save();
        }


        return redirect()->route('admin.persons')->with('status', 'Member successfully addedd.'); 
        //return view('admin.person.add', compact('person'));
    }
}
