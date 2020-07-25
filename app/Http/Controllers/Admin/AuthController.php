<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public  function index()
    {
        return view('auth.auth');
    }
    public function login(Request $request){
      $v = validator($request->all(), [
            'email'=>'required',
            'password'=>'required',
        ] , [
            'email.required'=>trans('site.email required'),
            'password.required'=>trans('site.password required'),
        ]);
      
        if (\Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))

        {
            return redirect()->route('admin-index');
                }
       
       return redirect()->route('get.login')->withErrors('برجاء التأكد من إسم المستخدم وكلمه المرور');
    }

    public function logout(){

        auth()->guard('admin')->logout();
        return redirect()->route('get.login');

    }
}
