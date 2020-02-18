<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function index()
    {

        if (Auth::guard('admins')->user()) {
            return redirect('admin/dashboard');
        } else {

            return view('admin/login');
        }
    }

    public function dashboard()
    {

        return view('admin.index');
    }

    public function ad_user()
    {
        return view('admin/ad_user');
    }

    public function edit_user($id)
    {
        $id = decrypt($id);
        $data['user'] = User::find($id);
        return view('admin.ad_user', $data);

    }

    public function delete_user($id)
    {
        $id = decrypt($id);
        $user = User::where('id', $id)->delete();
        if ($user) {
            Session::flash('success', 'user deleted successfully');
            return back();
        }
    }

    public function view_all_coache()
    {
        $data['user'] = User::where('user_type', 'coache')->orderBy('id', 'desc')->get();
        return view('admin/view_user', $data);
    }

    public function active_inactive_user($id)
    {
        $id = decrypt($id);
        $user = User::find($id);
        if ($user->status == 1) {
            $user->status = 0;
            Session::flash('success', 'User inactivated successfully');
        } else {
            $user->status = 1;
            Session::flash('success', 'User activated successfully');
        }
        $user->save();
        return back();
    }

    public function post_user(Request $request)
    {
        if ($request->id) {
            $user = User::find($request->id);
        } else {

            $user = new User();
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->user_type = $request->user_type;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        Session::flash('success', 'Your user added successfully');
        return redirect('admin/view-all-user');
    }

    public function view_all_user()
    {

        $data['user'] = User::where('user_type', 'user')->orderBy('id', 'desc')->get();
        return view('admin/view_user', $data);
    }

    public function login(Request $request)
    {

        if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1, 'status' => 1])) {

            return redirect('admin/dashboard');
        } else {
            Session::flash('error', 'invalid email or password');
            return redirect('admin/login');
        }
    }

    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect('admin/login');
    }
}
