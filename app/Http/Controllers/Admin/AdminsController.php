<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminPermissions:1');
    }
    public function admins()
    {
        $admins = Admin::where('isSuper',0)->where('id', '!=', auth()->guard('admin')->user()->id)->get();
        $roles = Role::all();
        
        return view('admin.admins', compact('admins', 'roles'));
    }

    public function add(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:admins,name|max:50',
            'email' => 'required|unique:admins,email|max:50',
            'password' => 'required|min:6|max:50',
            'roles' => 'required',
        ],
            [
                'name.required' =>'please add name',
                'name.unique' => 'please add name',
                'email.required' => 'please add name',
                'email.unique' =>'please add name',
                'password.required' => 'please add name',
                'password.min' => 'please add name',
                'roles.required' => 'please add name',
            ]);
        $input = $request->all();

        $input['password'] = bcrypt($request->password);
        $admin = Admin::create($input);
        if ($admin) {
            $admin->roles()->attach($request->roles);
            return redirect()->back()->with('success', 'successfull');
        }
        return redirect()->back()->with('error', trans('admin.error'));
    }

    public function edit(Request $request)
    {
        $checker = Admin::find($request->admin_id);
        $this->validate($request, [
            'name' => 'required|max:50|unique:admins,name,' . $checker->id,
            'email' => 'required|max:50|unique:admins,email,' . $checker->id,
            'password' => 'nullable|min:6|max:50',
            'roles' => 'required',
        ],
            [
                'name.required' => 'please add name',
                'name.unique' => 'please add name',
                'email.required' =>'please add name',
                'email.unique' => 'please add name',
                'password.min' => 'please add name',
                'roles.required' =>'please add name',
            ]);
        $input = $request->all();
        if ($request->password) {
            $input['password'] = bcrypt($request->password);
        }
        $input['password'] = $checker->password;
        $admin = $checker->update($input);
        if ($admin) {
            $checker->roles()->sync($request->roles);
            return redirect()->back()->with('success', 'successfull');
        }
        return redirect()->back()->with('error', 'error');
    }

    public function delete(Request $request)
    {
        $checker = Admin::find($request->admin_id);
        $checker->roles()->detach();
        $checker->delete();
        return redirect()->back()->with('success', 'successfull');
    }
}
