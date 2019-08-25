<?php

namespace App\Http\Controllers\Api;

use App\Production;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    public function favorite(Request $request)
    {
        try {
            $production = Production::find($request->id);
            $production->toggleFavorite($request->user_id);
        } catch (\Exception $exception) {
            return response()->json(['status' => 'error', 'message' => 'Production not found']);
        }

        return response()->json(['status' => 'success', 'production' => $production->only(['id', 'title', 'phone1', 'phone2', 'email',]), 'isFavorited' => $production->isFavorited($request->user_id), 'message' => 'You have successfully added to favorites']);
    }
}
