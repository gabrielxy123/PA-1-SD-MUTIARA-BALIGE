<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $required = [
                'username' => 'required|min:5',
                'password' => 'required|min:6',
            ];

            $message = [
                'username.required' => 'Kolom username harus diisi',
                'username.min' => 'username minimal 5 character',
                'password.required' => 'Kolom password harus diisi',
                'password.min' => 'password minimal 6 character',
            ];
            $this->validate($request, $required, $message);
            if (Auth::guard('admin')->attempt(['username' => $data['username'], 'password' => $data['password']])) {
                return redirect('/admin/index');
            } else {
                return redirect()->back()->with('error_message', 'invalid username or password');
            }
        }
        return view('login');
    }
    public function Index(){
        return view('admin.index');
    }
    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
