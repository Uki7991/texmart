<?php

namespace App\Http\Controllers\Admin;

use App\Production;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->type;

        return view('admin.productions.index', [
            'type' => $type,
        ]);
    }

    public function datatable(Request $request)
    {
        $type = $request->type;
        $productions = Production::where('type', $type)->get();

        return DataTables::of($productions)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $requestType = $request->type;

        $types = Type::all();
        $productCats = collect();
        foreach ($types as $type) {
            if ($requestType == 'productions' && $type->title == 'Производство') {
                $productCats = $productCats->merge($type->categories);
            }
            if ($requestType == 'service' && $type->title == 'Услуги') {
                $productCats = $productCats->merge($type->categories);
            }
            if ($requestType == 'product' && $type->title == 'Товары') {
                $productCats = $productCats->merge($type->categories);
            }
        }

        return view('admin.productions.create', [
            'productCats' => $productCats,
            'users' => User::whereIn('role_id', [4, 5])->get(),
            'type' => $requestType,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(Production $production)
    {
        //
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
}
