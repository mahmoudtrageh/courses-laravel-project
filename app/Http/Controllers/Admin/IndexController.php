<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RegisterCourse;
use App\Message;
use App\Bank;
use App\Condition;
use App\Service;
use App\Link;
use App\PaymentInfo;
use Illuminate\Support\Facades\Mail;
use App\Mail\PayCredit;

class IndexController extends Controller
{
    
    public function index ()
    {

        if(auth()->guard('admin')->user()){
            return view('admin.index');

        } else {

        return redirect('login');

    }
    }

    
     public function registers (Request $request)
    {
        $registers = RegisterCourse::OrderBy('created_at', 'desc')->paginate(7);

        return view('admin.registers', compact('registers'));
    }

     public function payments ()
    {

        $banks = Bank::all();
        $payinfos = PaymentInfo::all();

        return view('admin.payments', compact('banks', 'payinfos'));
    }

    public function conditions ()
    {

        $conditions = Condition::first();

        return view('admin.conditions', compact('conditions'));
    }

    public function services ()
    {

        $services = Service::first();

        return view('admin.services', compact('services'));
    }

    public function links ()
    {

        $links = Link::first();

        return view('admin.links', compact('links'));
    }

    public function customError ()
    {
        return view('errors.404');
    }

    public function updateStatus(Request $request)
    {


        $user = PaymentInfo::find($request->id);
        $user->paid_status = $request->status;
        $user->save();

        \Mail::to($user->email)->send(new PayCredit());

        return response()->json(["status" => "ok", 'user' => $user]);
    }

    public function readMessage(Request $request)
    {

        $users = Message::all();
        foreach($users as $user) {
            $user->status = 1;
            $user->save();
        }
        
        return response()->json(["status" => "ok", 'user' => $user]);

    }

    public function addBank(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
        ],
            [
                'name.required' =>'please add name',
            ]);

            $input = $request->all();
           
            Bank::create($input);
            return redirect()->back()->with('success', 'added');
    
    }

    public function editBank(Request $request)
    {

        $checker = Bank::find($request->bank_id);
        $input = $request->all();
            
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }

    public function editCondition(Request $request)
    {

        $checker = Condition::first();
        $input = $request->all();
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }

    public function editServices(Request $request)
    {

        $checker = Service::first();
        $input = $request->all();
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }

    public function editLinks(Request $request)
    {

        $checker = Link::first();
        $input = $request->all();
    
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteBank(Request $request)
    {
        $checker = Bank::find($request->bank_id);
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }

 public function editRegister(Request $request)
    {

        $checker = RegisterCourse::find($request->register_id);
        $input = $request->all();
            
        $checker->update($input);
        return redirect()->back()->with('success', 'updated');


    }


    public function deleteRegister(Request $request)
    {
        $checker = RegisterCourse::find($request->register_id);
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }

    public function getMessage ()
    {

        $messages = Message::paginate(7);

        return view('admin.messages', compact('messages'));
    }


    public function deleteMessage(Request $request)
    {
        $checker = Message::find($request->message_id);
        $checker->delete();
        return redirect()->back()->with('success', 'deleted');
    }

    public function updateMessage(Request $request)
    {


        $user = Message::find($request->id);

        $user->status = $request->status;
        $user->save();
        return response()->json(["status" => "ok", 'user' => $user]);
    }
}
