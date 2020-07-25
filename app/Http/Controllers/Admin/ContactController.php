<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{

    public function index ()
    {
        $contact = Contact::first();

        return view('admin.contact', compact('contact'));
    }

    public function editContact(Request $request)
    {

        $checker = Contact::first();
        $input = $request->all();
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


}
