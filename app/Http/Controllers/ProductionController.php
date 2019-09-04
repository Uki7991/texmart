<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductionStoreRequest;
use App\Http\Requests\ProductionUpdateRequest;
use App\Production;
use App\Type;
use Dorvidas\Ratings\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->type == 'productions') {
            $productions = Production::where('type', 'productions')->get();
        } else if ($request->type == 'service') {
            $productions = Production::where('type', 'service')->get();
        } else if ($request->type == 'product') {
            $productions = Production::where('type', 'product')->get();
        } else {
            $productions = Production::all();
        }
        $categories = Category::all()->where('parent_id', 'is', null);

        return view('productions.index', [
            'productions' => $productions,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductionStoreRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = \auth()->id();
        $production = Production::create($validated);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $production = Production::whereSlug($slug)->firstOrFail();
        $categories = $production->categories->where('parent_id', 'is', null);
//        $categories2 = $production->categories->has('productions');

//        $categories->map(function ($item, $index) {
//            $item->childs = $item->childs->has('productions');
//        });

        $viewed = Production::getProductionViews($production->id);

        if (!$viewed) {
            $production->views = $production->views + 1;
            $production->save();
        }

        $ratings = Rating::of($production)->get();
        $rating = count($ratings) ? $ratings->avg('rating') : 0;

        return view('productions.show', [
            'production' => $production,
            'categories' => $categories,
            'rating' => $rating,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function edit(Production $production)
    {
        $types = Type::all();
        $productionCats = collect();

        foreach ($types as $type) {
            if ($type->title == 'Производство') {
                $productionCats = $productionCats->merge($type->categories);
            }
        }

        return view('user-production.form-tabs.production-edit', [
            'production' => $production,
            'productionCats' => $productionCats,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(ProductionUpdateRequest $request, Production $production)
    {
        $validated = $request->validated();
        $production->update($validated);

        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function destroy(Production $production)
    {
        //
    }

    public function rate(Request $request) {
        $production = Production::find($request->id);
        $rating = $request->rating;
        $production->rating = $rating;
        $production->save();

        $production->rate()->give($rating)->by(Auth::user());
        $production->save();

        $ratings = Rating::of($production)->get();

        return response()->json([
            'production' => $production->only(['id', 'title', 'rating']),
            'rating' => $ratings->avg('rating'),
        ]);
    }

    public function filter(Request $request)
    {
        $params = $request->params;
        $type = $request->type;
        $cats = Category::all();
        if ($params) {
            $cats = $cats->whereIn('id', $params);
        }
        $productions = collect();
        foreach ($cats as $cat) {
            $productions = $productions->merge($cat->productions);
        }
        $productions = $productions->unique('id');

        if ($type == 'productions') {
            $productions = $productions->where('type', $type);
        }
        if ($type == 'service') {
            $productions = $productions->where('type', $type);
        }
        if ($type == 'product') {
            $productions = $productions->where('type', $type);
        }


        return response()->json(view('productions.list', [
            'productions' => $productions,
        ])->render());
    }
}
