<?php

namespace App\Http\Controllers;

use App\Category;
use App\Production;
use App\Type;
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
            foreach ($item->childs->only(['id', 'title']) as $child) {
                if (count($child->childs)) {
                    $this->children($child);
                }
                $subs[] = $child->only(['id', 'title']);
            }
            return $item->only(['id', 'title']);
        }
        return $item->only(['id', 'title']);
    }

    public function getCategories()
    {
        $categories = Category::where('parent_id', null)->get(['id', 'title']);

        $categories = $categories->each(function ($item) {
            $this->children($item);
        });

        return response()->json($categories);
    }

    public function index()
    {
        $productions = Production::where('user_id', auth()->user()->id)->get();
        $categories = Category::where('parent_id', null)->get(['id', 'title']);
        $types = Type::all();
        $productionCats = collect();
        $productCats = collect();
        $serviceCats = collect();
        foreach ($types as $type) {
            if ($type->title == 'Производство') {
                $productionCats = $productionCats->merge($type->categories);
            }
            if ($type->title == 'Услуги') {
                $serviceCats = $serviceCats->merge($type->categories);
            }
            if ($type->title == 'Товары') {
                $productCats = $productCats->merge($type->categories);
            }
        }

        $user = auth()->user();
        return view('user-production.profile', [
            'user' => $user,
            'productions' => $productions,
            'productionCats' => $productionCats,
            'productCats' => $productCats,
            'serviceCats' => $serviceCats,
        ]);
    }
}
