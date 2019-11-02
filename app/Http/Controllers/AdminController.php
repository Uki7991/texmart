<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        if ($request->getRequestUri() == '/admin') {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.dashboard');
    }
}
