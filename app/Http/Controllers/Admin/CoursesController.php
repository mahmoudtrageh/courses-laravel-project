<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;
use App\FirstSlider;
use App\RegisterCourse;
use App\Instructor;

class CoursesController extends Controller
{
    public function index (Request $request)
    {

        $courses = Course::paginate(10);
        $first_sliders = FirstSlider::all();
        $item = $request->item;

                $instructors = Instructor::all();

        $searched_courses = Course::where('c_name', 'LIKE', '%' . $item  . '%')->get();

        return view('admin.courses', compact('courses', 'first_sliders', 'item', 'searched_courses', 'instructors'));
    }

    public function addCourse(Request $request)
    {

        $this->validate($request, [
            'c_name' => 'required',
            'course_img' => 'required',
            'start' => 'required',
            'end' => 'required',
            'value' => 'required',
            'course_category' => 'required',
        ],
            [
                'c_name.required' =>'please add name',
                'course_img.required' =>'please add name',
                'start.required' =>'please add name',
                'end.required' =>'please add name',
                'value.required' =>'please add name',
                'course_category.required' =>'please add name',
            ]);

            $input = $request->all();
            $destination = public_path('images/img');
            $input['course_img'] = add_file($request->file('course_img'), $destination);

            // $input['slider_icon'] = add_file($request->file('slider_icon'), $destination);

            $instructor = Course::create($input);

              if ($instructor) {
            $instructor->instructors()->attach($request->instructors);
        }
            return redirect()->back()->with('success', 'added');
    
    }

    public function editCourse(Request $request)
    {

        $checker = Course::find($request->course_id);
        $input = $request->all();
        
        if ($request->file('course_img')) {
            $destination = public_path('images/img');
            $input['course_img'] = update_file($request->file('course_img'), $checker, 'course_img', $destination);
        }
       
         $instructor = $checker->update($input);
        if ($instructor) {
            $checker->instructors()->sync($request->instructors);
        }

    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteCourse(Request $request)
    {
        $checker = Course::find($request->course_id);
        $destination = public_path('images/img');
        delete_file($checker, 'course_img', $destination);
        // delete_file($checker, 'slider_icon', $destination);
         $checker->instructors()->detach();
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }



     public function addInstructor(Request $request)
    {

            $input = $request->all();

         $destination = public_path('images/img');
            $input['ins_img'] = add_file($request->file('ins_img'), $destination);



         Instructor::create($input);

            return redirect()->back()->with('success', 'added');
    
    }

    public function editInstructor(Request $request)
    {

        $checker = Instructor::find($request->instructor_id);
        $input = $request->all();
    
      if ($request->file('ins_img')) {
            $destination = public_path('images/img');
            $input['ins_img'] = update_file($request->file('ins_img'), $checker, 'ins_img', $destination);
        }

        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteInstructor(Request $request)
    {
        $checker = Instructor::find($request->instructor_id);

          $destination = public_path('images/img');
        delete_file($checker, 'ins_img', $destination);
       
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }


     public function addFirstSlider(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:admins,name|max:50',
            // 'slider_img' => 'required|unique:admins,name|max:50',
            // 'slider_icon' => 'required|unique:admins,name|max:50',
        ],
            [
                'title.required' =>'please add name',
                // 'slider_img.required' =>'please add name',
                // 'slider_icon.required' =>'please add name',
            ]);

            $input = $request->all();
            // $destination = public_path('images/img');
            // $input['slider_img'] = add_file($request->file('slider_img'), $destination);

            // $input['slider_icon'] = add_file($request->file('slider_icon'), $destination);

            FirstSlider::create($input);
            return redirect()->back()->with('success', 'added');
    
    }

    public function editFirstSlider(Request $request)
    {

        $checker = FirstSlider::find($request->slider_id);
        $input = $request->all();
        
        // if ($request->file('slider_img')) {
        //     $destination = public_path('images/img');
        //     $input['slider_img'] = update_file($request->file('slider_img'), $checker, 'slider_img', $destination);
        // }
        // if ($request->file('slider_icon')) {
        //     $destination = public_path('images/img');
        //     $input['slider_icon'] = update_file($request->file('slider_icon'), $checker, 'slider_icon', $destination);
        // }
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteFirstSlider(Request $request)
    {
        $checker = FirstSlider::find($request->slider_id);
        // $destination = public_path('images/img');
        // delete_file($checker, 'slider_img', $destination);
        // delete_file($checker, 'slider_icon', $destination);
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }

}
