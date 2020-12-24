<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        return view('admin.dashboard')->with('users',$users);
    }
    
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status','Your Data is updated');
    }
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status','Your Data is deleted');

    }
}