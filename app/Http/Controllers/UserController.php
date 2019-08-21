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

    function children($item)
    {
        if (count($item->childs)) {
            $subs = [];
            foreach ($item->childs as $child) {
                if (count($child->childs)) {
                    $this->children($child);
                }
                $subs[] = $child->only(['id', 'title']);
            }
            return $item;
        }
        return $item;
    }

    public function index()
    {
        $productions = Production::where('user_id', auth()->user()->id)->get();
        $categories = Category::where('parent_id', null)->get(['id', 'title']);

        $categories = $categories->each(function ($item) {
            $this->children($item);
        });

        $user = auth()->user();
        return view('user-production.profile', [
            'user' => $user,
            'productions' => $productions,
            'categories' => $categories,
        ]);
    }
}
