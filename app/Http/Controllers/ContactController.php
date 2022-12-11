<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $con = Contact::latest()->paginate(10);

        return view('admin.contact.index',[
            'contacts'=>$con,
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $c = $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'text'=>'required',
        ],[
            'name.required'=>'Iltimos nomingizni kiriting.',
            'email.required'=>'Iltimos emailingizni kiriting.',
            'text.required'=>'Iltimos matinigizni yozing.',
        ]);


        $con = new Contact;
        $con->name = $c['name'];
        $con->email = $c['email'];
        $con->text = $c['text'];

        $con->save();

        return redirect()->back()->with( 'message','Xabar muvaffaqiyatli yuborildi');
    }


    public function show(Contact $contact)
    {

    }

    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }
}
