<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

class AboutController extends Controller
{

    public function index ()
    {
        $about = About::first();

        return view('admin.about', compact('about'));
    }

    public function editAbout(Request $request)
    {

        $checker = About::first();
        $input = $request->all();
        
        if ($request->file('img1')) {
            $destination = public_path('images/img');
            $input['img1'] = update_file($request->file('img1'), $checker, 'img1', $destination);
        }

        if ($request->file('img2')) {
            $destination = public_path('images/img');
            $input['img2'] = update_file($request->file('img2'), $checker, 'img2', $destination);
        }

        if ($request->file('img3')) {
            $destination = public_path('images/img');
            $input['img3'] = update_file($request->file('img3'), $checker, 'img3', $destination);
        }
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


}
