<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MailRequest;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Mail;

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

    public function mail(MailRequest $request)
    {

        $data = $request->all();
        $data['message'] = htmlspecialchars($data['message'], ENT_QUOTES | ENT_HTML5, 'UTF-8');



        try {
            Mail::to($data['email'])->send(new MessageMail($data));
        } catch (\Exception $e) {
            return back()->withErrors(['email' => $e->getMessage()])->onlyInput('email');
        }
    }
}
