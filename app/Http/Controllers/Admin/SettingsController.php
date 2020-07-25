<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\HomeAbout;
use App\NewBar;
use App\Newsletter;
use App\HeaderDetail;

class SettingsController extends Controller
{
    public function index ()
    {
        $images = Image::first();
        $home_about = HomeAbout::first();
        $paragraphs = Newsletter::first();
        $news = NewBar::all();
        $header_detail = HeaderDetail::first();
        return view('admin.settings', compact('images', 'home_about', 'news', 'paragraphs', 'header_detail'));
    }

    public function editImage(Request $request)
    {

        $checker = Image::first();
        $input = $request->all();
        
        if ($request->file('home_img')) {
            $destination = public_path('images/img');
            $input['home_img'] = update_file($request->file('home_img'), $checker, 'home_img', $destination);
        }
        if ($request->file('logo')) {
            $destination = public_path('images/img');
            $input['logo'] = update_file($request->file('logo'), $checker, 'logo', $destination);
        }
        if ($request->file('courses_img')) {
            $destination = public_path('images/img');
            $input['courses_img'] = update_file($request->file('courses_img'), $checker, 'courses_img', $destination);
        }
        if ($request->file('course_img')) {
            $destination = public_path('images/img');
            $input['course_img'] = update_file($request->file('course_img'), $checker, 'course_img', $destination);
        }
        if ($request->file('fixed_img')) {
            $destination = public_path('images/img');
            $input['fixed_img'] = update_file($request->file('fixed_img'), $checker, 'fixed_img', $destination);
        }
        if ($request->file('about_img')) {
            $destination = public_path('images/img');
            $input['about_img'] = update_file($request->file('about_img'), $checker, 'about_img', $destination);
        }

         if ($request->file('news_img')) {
            $destination = public_path('images/img');
            $input['news_img'] = update_file($request->file('news_img'), $checker, 'news_img', $destination);
        }

        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }
    
    public function editHeaderDetail(Request $request)
    {

        $checker = HeaderDetail::first();
        $input = $request->all();
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }

    public function editDetail(Request $request)
    {

        $checker = HomeAbout::first();
        $input = $request->all();
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }

    public function editNewsletter(Request $request)
    {

        $checker = Newsletter::first();
        $input = $request->all();
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }

    public function addNew(Request $request)
    {

        $this->validate($request, [
            'new' => 'required|unique:admins,name|max:50',
        ],
            [
                'new.required' =>'please add name',
            ]);
        $input = $request->all();
        $new = NewBar::create($input);
            return redirect()->back()->with('success', 'successfull');
    
    }

    public function editNew(Request $request)
    {
        $checker = NewBar::find($request->new_id);
        $this->validate($request, [
            'new' => 'required|unique:admins,name|max:50',

        ],
            [
                'new.required' =>'please add name',

            ]);
        $input = $request->all();
        $new = $checker->update($input);
       
            return redirect()->back()->with('success', 'successfull');
       
    }

    public function deleteNew(Request $request)
    {
        $checker = NewBar::find($request->new_id);
        $checker->delete();
        return redirect()->back()->with('success', 'successfull');
    }

}
