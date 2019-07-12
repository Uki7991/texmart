<?php

namespace App\Http\Controllers;

use App\Production;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $result = collect(['Обьявления' => Production::where(function($query) use ($search) {
            $query->where('title', 'like', "%$search%");
        })->get(['id', 'title', 'slug'])]);
//        $result = $result->merge(collect(['Клиники' => Clinic::where('clinic_name', 'like', '%' . $search. '%')->get(['id', 'clinic_name'])]));
//        $result = $result->merge(collect(['Услуги' => Service::where('name', 'like', '%' . $search. '%')->get(['id', 'name'])]));
        if ($request->ajax()) {
            return response()->json(view('search-result-ajax', [
                'result' => $result,
            ])->render());
        }
        return view('search-result', [
            'result' => $result,
        ]);
    }
}
