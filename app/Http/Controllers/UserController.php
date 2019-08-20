<?php

namespace App\Http\Controllers;

use App\Category;
use App\Production;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $productions = Production::where('user_id', auth()->user()->id)->get();

        $user = auth()->user();
        return view('user-production.profile', [
            'user' => $user,
            'productions' => $productions,
            'categories' => Category::all(),
        ]);
    }
}
