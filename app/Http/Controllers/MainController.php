<?php

namespace App\Http\Controllers;

use App\Announce;
use App\Bid;
use App\Blog;
use App\Category;
use App\Mail\BidAccept;
use App\Production;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic;
use Midnite81\GeoLocation\Services\GeoLocation;
use Rodenastyle\StreamParser\StreamParser;
use Tightenco\Collect\Support\Collection;

class MainController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            dd('ajax');
        }

//        $productions = Production::where('type', 'productions')->get(['id', 'title', 'slug', 'logo', 'views']);
//        $services = Production::where('type', 'service')->get(['id', 'title', 'slug', 'logo', 'views']);
//        $products = Production::where('type', 'product')->get(['id', 'title', 'slug', 'logo', 'views']);
        $announces = Announce::all()->reverse();
        $this->address(new GeoLocation());
        $blogs = Blog::all()->sortByDesc('id')->take(4);
        return view('welcome', [
//            'productions' => $productions->sortByDesc('id'),
//            'services' => $services->sortByDesc('id'),
//            'products' => $products->sortByDesc('id'),
            'announces' => $announces,
            'blogs' => $blogs,
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $result = collect(['Производственные фабрики  и цеха' => Production::where('title', 'like', "%$search%")->where('type', 'productions')->get(['id', 'title', 'slug', 'logo', 'views'])]);
        $result = $result->merge(collect(['Товары' => Production::where('title', 'like', '%' . $search. '%')->where('type', 'product')->get(['id', 'title', 'slug', 'logo', 'views'])]));
        $result = $result->merge(collect(['Услуги' => Production::where('title', 'like', '%' . $search. '%')->where('type', 'service')->get(['id', 'title', 'slug', 'logo', 'views'])]));
        $categories = Category::where('title', 'like', '%'.$search.'%')->get();
        foreach ($categories as $category) {
            $result = $result->merge(collect([$category->title => $category->productions]));
        }
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

    public function imageResize(Request $request)
    {
        if ($request->image) {
            $fileName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME).'.'.$request->image->getClientOriginalExtension();

            $file = ImageManagerStatic::make($request->image);

            if ($width = $request->width) {
                $file = $file->resize($width, null, function ($constraint) {
                    return $constraint->aspectRatio();
                });
            } elseif ($height = $request->height) {
                $file = $file->resize(null, $height, function ($constraint) {
                    return $constraint->aspectRatio();
                });
            }

            $file->save(public_path('img/'.$fileName), 40);
        }

        if ($request->images) {
            foreach ($request->images as $image) {
                $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME).'.'.$image->getClientOriginalExtension();

                $file = ImageManagerStatic::make($image);

                if ($width = $request->width) {
                    $file = $file->resize($width, null, function ($constraint) {
                        return $constraint->aspectRatio();
                    });
                } elseif ($height = $request->height) {
                    $file = $file->resize(null, $height, function ($constraint) {
                        return $constraint->aspectRatio();
                    });
                }

                $file->save(public_path('img/'.$fileName), 40);
            }
        }

        return redirect()->back();
    }
}
