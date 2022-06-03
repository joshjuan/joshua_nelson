<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('id','desc')->paginate(10)->setPath('contacts');
        return view('index',compact(['contacts']));
    }


    public function view(){
        $contacts = Contact::get();

        return view('index',compact('contacts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'title' => 'required',
            'region' => 'required',
            'district' => 'required',
            'mobile' => 'required'
        ]);
    }

    public function add(request $request){
        $Contacts = Contact::get();

        Contact::insert(
            [
                "first_name"=>$request->first_name,
                "last_name"=>$request->last_name,
                "title"=>$request->title,
                "district"=>$request->district,
                "region"=>$request->region,
                "email"=>$request->email,
                "mobile"=>$request->mobile,
            ]
        );

        return view('index', compact('Contacts'))->with('success','Create Successfully');
    }



//    public function show()
//    {
//        $web =  contact::get();
//        return view('index',compact('web'));
//    }

    public function edit($id)
    {
        $data = Contact::find($id);
        //dd($data);
        return view('edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'lastname_name' => 'required',
            'mobile' => 'required'
        ]);

        Contact::where('id',$id)->update($request->all());
        return redirect('/')->with('success','Update Successfully');

    }

    public function destroy($id)
    {
        Contact::where('id',$id)->delete();
        return redirect('/')->with('success','Delete Successfully');
    }

    public function josh($id){

        $data = Contact::find($id);
        //dd($data);
        return view('contact',compact('data'));
        //return view('contact');
    }


}


