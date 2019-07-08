<?php

namespace App\Http\Controllers;

use App\Production;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $productions = null;
        if ($user) {
            $productions = Auth::user()->favorite(Production::class);
        }

        return view('favorite', [
            'productions' => $productions,
        ]);
    }
}
