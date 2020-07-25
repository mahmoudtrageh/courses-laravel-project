<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Social;

class SocialController extends Controller
{

    public function index ()
    {
        $social = Social::first();

        return view('admin.socials', compact('social'));
    }

    public function editSocial(Request $request)
    {

        $checker = Social::first();
        $input = $request->all();
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


}
