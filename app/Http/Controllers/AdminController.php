<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return redirect()->route('admin.admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }
}
