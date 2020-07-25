<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SecondSlider;
use App\ThirdSlider;
use App\FourthSlider;

class SliderController extends Controller
{
    public function index ()
    {
       
        $second_sliders = SecondSlider::all();
        $third_sliders = ThirdSlider::all();
        $fourth_sliders = FourthSlider::all();

        return view('admin.sliders', compact('second_sliders', 'third_sliders', 'fourth_sliders'));
    }

   

    public function addSecondSlider(Request $request)
    {

        $this->validate($request, [
            'main_name' => 'required',
            'slider_img' => 'required',
            'second_name' => 'required',
            // 'slider_icon' => 'required|unique:admins,name|max:50',
        ],
            [
                'main_name.required' =>'please add name',
                'slider_img.required' =>'please add name',
                'second_name.required' =>'please add name',
                // 'slider_icon.required' =>'please add name',
            ]);

            $input = $request->all();
            $destination = public_path('images/img');
            $input['slider_img'] = add_file($request->file('slider_img'), $destination);

            SecondSlider::create($input);
            return redirect()->back()->with('success', 'added');
    
    }

    public function editSecondSlider(Request $request)
    {

        $checker = SecondSlider::find($request->second_id);
        $input = $request->all();
        
        if ($request->file('slider_img')) {
            $destination = public_path('images/img');
            $input['slider_img'] = update_file($request->file('slider_img'), $checker, 'slider_img', $destination);
        }
        // if ($request->file('slider_icon')) {
        //     $destination = public_path('images/img');
        //     $input['slider_icon'] = update_file($request->file('slider_icon'), $checker, 'slider_icon', $destination);
        // }
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteSecondSlider(Request $request)
    {
        $checker = SecondSlider::find($request->second_id);
        $destination = public_path('images/img');
        delete_file($checker, 'slider_img', $destination);
        // delete_file($checker, 'slider_icon', $destination);
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }

 public function addThirdSlider(Request $request)
    {

        $this->validate($request, [
            'main_name' => 'required',
            'slider_img' => 'required',
            'second_name' => 'required',
            // 'slider_icon' => 'required|unique:admins,name|max:50',
        ],
            [
                'main_name.required' =>'please add name',
                'slider_img.required' =>'please add name',
                'second_name.required' =>'please add name',
                // 'slider_icon.required' =>'please add name',
            ]);

            $input = $request->all();
            $destination = public_path('images/img');
            $input['slider_img'] = add_file($request->file('slider_img'), $destination);

            ThirdSlider::create($input);
            return redirect()->back()->with('success', 'added');
    
    }

    public function editThirdSlider(Request $request)
    {

        $checker = ThirdSlider::find($request->third_id);
        $input = $request->all();
        
        if ($request->file('slider_img')) {
            $destination = public_path('images/img');
            $input['slider_img'] = update_file($request->file('slider_img'), $checker, 'slider_img', $destination);
        }
        // if ($request->file('slider_icon')) {
        //     $destination = public_path('images/img');
        //     $input['slider_icon'] = update_file($request->file('slider_icon'), $checker, 'slider_icon', $destination);
        // }
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteThirdSlider(Request $request)
    {
        $checker = ThirdSlider::find($request->third_id);
        $destination = public_path('images/img');
        delete_file($checker, 'slider_img', $destination);
        // delete_file($checker, 'slider_icon', $destination);
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }

public function addFourthSlider(Request $request)
    {


            $input = $request->all();
            $destination = public_path('images/img');
            $input['slider_img'] = add_file($request->file('slider_img'), $destination);

            FourthSlider::create($input);
            return redirect()->back()->with('success', 'added');
    
    }

    public function editFourthSlider(Request $request)
    {

        $checker = FourthSlider::find($request->fourth_id);
        $input = $request->all();
        
        if ($request->file('slider_img')) {
            $destination = public_path('images/img');
            $input['slider_img'] = update_file($request->file('slider_img'), $checker, 'slider_img', $destination);
        }
       
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteFourthSlider(Request $request)
    {
        $checker = FourthSlider::find($request->second_id);
        $destination = public_path('images/img');
        delete_file($checker, 'slider_img', $destination);
        // delete_file($checker, 'slider_icon', $destination);
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }


}
