<?php

namespace App\Http\Controllers\Api;

use App\Production;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function favorite(Request $request)
    {
        try {
            $production = Production::find($request->id);
            $production->toggleFavorite($request->user_id);
        } catch (\Exception $exception) {
            return response()->json(['status' => 'error', 'message' => 'Production not found']);
        }

        return response()->json(['status' => 'success', 'production' => $production, 'isFavorited' => $production->isFavorited($request->user_id), 'message' => 'You have successfully added to favorites']);
    }
}
