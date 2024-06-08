<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::where('id', auth('admin')->user()->id)->first();
        $data = [
            'title' => 'Admin | Dashboard',
            'admin'  => $admin,
        ];

        return view('admin.dashboard')->with($data);
    }

    public function showMailForm()
    {
        $admin = Admin::where('id', auth('admin')->user()->id)->first();

        $data = [
            'title' => 'Admin | Send a message',
            'admin' => $admin
        ];

        return view('admin.mail-form')->with($data);
    }
}
