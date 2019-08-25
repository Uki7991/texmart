<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\UpdateUserPassword;
use App\Production;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

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

    public function edit(Request $request, User $user)
    {
        $user->name = $request->name;
        if ($request->avatar) {
            $fileName = 'users/'.uniqid('user_').'.jpg';

            $file = ImageManagerStatic::make($request->avatar)->stream('jpg', 40);
            Storage::disk('local')->put('public/'.$fileName, $file);
            $user->avatar = $fileName;
        }

        $user->save();

        return redirect()->back();
    }

    public function editPassword(UpdateUserPassword $request, User $user)
    {
        $validated = $request->validated();

        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()->back();
    }
}
