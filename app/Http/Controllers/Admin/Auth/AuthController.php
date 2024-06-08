<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Admin Login'
        ];

        return view('admin.auth.login')->with($data);
    }

    public function login(LoginRequest $request)
    {

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->has('remember');

        if (Auth::guard('admin')->attempt($data, $remember)) {
            $request->session()->regenerate();
            return redirect(route('admin.dashboard'))->with('message', 'You are now logged in');
        }


        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
