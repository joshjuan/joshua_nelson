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

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        Contact::create($request->all());
        return redirect()->back()->with('success','Create Successfully');
    }

    public function show($id)
    {
        $data =  Contact::find($id);
        return view('show',compact(['data']));
    }

    public function edit($id)
    {
        $data = Contact::find($id);
        return view('admin.contacts.edit',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        Contact::where('id',$id)->update($request->all());
        return redirect()->back()->with('success','Update Successfully');

    }

    public function destroy($id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->back()->with('success','Delete Successfully');
    }
}
