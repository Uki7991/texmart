<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductionStoreRequest;
use App\Production;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productions = Production::all();
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
//        dd($request);
        $lng = 0;
        $lat = 0;

        $production = Production::create($validated);

        return redirect()->back();

//        return DB::raw("ST_GeomFromText('POINT({$lng} {$lat})')");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $production = Production::whereSlug($slug)->firstOrFail();
        $categories = $production->categories->where('parent_id', 'is', null);
//        $categories2 = $production->categories->has('productions');

//        $categories->map(function ($item, $index) {
//            $item->childs = $item->childs->has('productions');
//        });

        return view('productions.show', [
            'production' => $production,
            'categories' => $categories,
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Production $production)
    {
        //
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

        $production->rate()->give($rating)->by(Auth::user());

        return response()->json(['production' => $production]);
    }
}
