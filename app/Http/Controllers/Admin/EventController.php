<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    public function index ()
    {
        $events = Event::all();

        return view('admin.events', compact('events'));
    }

    public function addEvent(Request $request)
    {

        $this->validate($request, [
            'date' => 'required',
            'title' => 'required',
            'detail' => 'required',
            'author' => 'required',
            'img' => 'required',
        ],
            [
                'date.required' =>'please add name',
                'title.required' =>'please add name',
                'detail.required' =>'please add name',
                'author.required' =>'please add name',
                'img.required' =>'please add name',
            ]);

            $input = $request->all();
            $destination = public_path('images/img');
            $input['img'] = add_file($request->file('img'), $destination);

            Event::create($input);
            return redirect()->back()->with('success', 'added');
    
    }

    public function editEvent(Request $request)
    {

        $checker = Event::find($request->event_id);
        $input = $request->all();
        
        if ($request->file('img')) {
            $destination = public_path('images/img');
            $input['img'] = update_file($request->file('img'), $checker, 'img', $destination);
        }
       
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteEvent(Request $request)
    {
        $checker = Event::find($request->event_id);
        $destination = public_path('images/img');
        delete_file($checker, 'img', $destination);
        // delete_file($checker, 'slider_icon', $destination);
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }

}