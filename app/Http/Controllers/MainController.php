<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Mail\BidAccept;
use App\Production;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

    public function storeBid(Request $request)
    {
        $bid = new Bid();
        $bid->name = $request->name;
        $bid->email = $request->email;
        $bid->code = $request->code;
        $bid->phone = $request->phone;
        $bid->bid = $request->bid;
        Mail::to('texmartcompanykg@gmail.com')->send(new BidAccept($bid));

        Session::flash('bid_success', 'Ваша заявка была отправлена');
        return redirect()->back();
    }
}
