<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\Admin;
use App\Models\AdminLogin;

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

            $admin = Admin::where('id', auth('admin')->user()->id)->first();

            $this->create_auth_log($admin);

            return redirect(route('admin.dashboard'))->with('message', 'You are now logged in');
        }


        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth('admin')->logout();

        $request->session()->forget('admin'); // Remove user-related session data
        $request->session()->regenerateToken();

        return redirect(route('admin.auth.login'))->with('success', 'sign out successfull.');
    }

    public function create_auth_log($admin)
    {
        $ip = getRealIP();

        $exist  = AdminLogin::where('admin_ip', $ip)->first();

        $login = new AdminLogin();

        if ($exist) {
            $login->longitude = $exist->longitude;
            $login->latitude = $exist->latitude;
            $login->city = $exist->city;
            $login->country = $exist->country;
            $login->country_code = $exist->country_code;
        } else {
            $info = json_decode(json_encode(getIpInfo()), true);
            $login->longitude  = @implode(',', $info['long']);
            $login->latitude  = @implode(',', $info['lat']);
            $login->city  = @implode(',', $info['city']);
            $login->country_code = @implode(',', $info['code']);
            $login->country  = @implode(',', $info['country']);
        }

        $clientAgent = osBrowser();
        $login->admin_id = $admin->id;
        $login->admin_ip = $ip;
        $login->browser = @$clientAgent['browser'];
        $login->os = @$clientAgent['os_platform'];

        $login->save();
    }
}
