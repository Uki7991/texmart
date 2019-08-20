<?php

namespace App\Http\Controllers\Api;

use App\Production;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductionController extends Controller
{
    public function show($id)
    {
        $production = Production::findOrFail($id);
        $production = $production->only(['id', 'title', 'phone1', 'phone2', 'email',]);
        return response()->json($production);
    }
}
