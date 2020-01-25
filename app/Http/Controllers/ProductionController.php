<?php

namespace App\Http\Controllers;

use App\Category;
use App\Feedback;
use App\Http\Requests\ProductionStoreRequest;
use App\Http\Requests\ProductionUpdateRequest;
use App\Production;
use App\Type;
use App\User;
use Dorvidas\Ratings\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use Rodenastyle\StreamParser\StreamParser;
use Tightenco\Collect\Support\Collection;

class ProductionController extends Controller
{
    public function index(Request $request)
    {
//        $type = $request->type;
        $productions = \auth()->user()->productions->where('type', 'productions');
        $products = \auth()->user()->productions->where('type', 'product');
        $services = \auth()->user()->productions->where('type', 'service');

        return view('profile.productions.index', [
//            'type' => $type,
            'productions' => $productions,
            'products' => $products,
            'services' => $services,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2(Request $request)
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
        $categories = Category::all()->where('parent_id', 'is', null)->sortBy('order');
        $productions = $productions->shuffle();

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
        return view('profile.productions.create', [
            'productCats' => $productCats,
//            'users' => User::whereIn('role_id', [4, 5])->get(),
            'type' => $requestType,
        ]);
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
        $categories = $production->categories;
        $viewed = Production::getProductionViews($production->id);

        if (!$viewed) {
            $production->views = $production->views + 1;
            $production->save();
        }

        $currencies = [];
        StreamParser::xml('https://www.nbkr.kg/XML/daily.xml')->each(function (Collection $currency) use (& $currencies) {
            $currencies[] = $currency;
        });

        if ($production->currency == 'сом') {
            $production->priceUSD = $production->price / floatval(str_replace(',', '.', $currencies[0]->get('Value')));
            $production->priceRUB = $production->price / floatval(str_replace(',', '.', $currencies[3]->get('Value')));
            $production->priceKGS = $production->price;
        } elseif ($production->currency == 'руб') {
            $production->priceUSD = $production->price * floatval(str_replace(',', '.', $currencies[3]->get('Value'))) / floatval(str_replace(',', '.', $currencies[0]->get('Value')));
            $production->priceKGS = $production->price * floatval(str_replace(',', '.', $currencies[3]->get('Value')));
            $production->priceRUB = $production->price;
        } elseif ($production->currency == '$') {
            $production->priceUSD = $production->price;
            $production->priceRUB = $production->price * floatval(str_replace(',', '.', $currencies[0]->get('Value'))) / floatval(str_replace(',', '.', $currencies[3]->get('Value')));
            $production->priceKGS = $production->price * floatval(str_replace(',', '.', $currencies[0]->get('Value')));
        }
        foreach ($categories as $index => $category) {
            $category->parent = $category->hasParent();
        }
//        $categories2 = $production->categories->has('productions');
//
//        $categories = $categories->map(function ($item, $index) {
//            $item->childs = $item->childs->has('productions');
//        });

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
    public function edit(Request $request, Production $production)
    {
        $requestType = $request->type;
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

        return view('profile.productions.edit', [
            'type' => $requestType,
            'user' => \auth()->user(),
            'productionCats' => $productionCats,
            'productCats' => $productCats,
            'serviceCats' => $serviceCats,
            'production' => $production,
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
        $production->updateColumns();

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
        $production->ratings()->delete();
        $production->favorites()->delete();
        $production->categories()->detach();
        $production->feedbacks()->delete();
        $production->delete();

        return redirect()->back();
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

    public function feedback(Request $request, Production $production)
    {
        $rating = Rating::where('model', Production::class)->where('model_id', $production->id)->where('rated_by', \auth()->user()->id)->first();

        if ($request->rating) {
            if (!$rating) {
                if (\auth()->user()->role->name == 'admin') {
                    if (!$production->expert) {
                        $production->expert = $request->rating;
                        $production->save();
                    }
                } else {
                    $production->rate()->give($request->rating)->by(\auth()->user());
                }
            }
        }
        if ($request->message) {
            if ($request->user_id) {
                $feedback = new Feedback([
                    'feedback' => $request->message,
                    'user_id' => $request->user_id,
                    'rating' => $request->rating ? $request->rating : null,
                ]);
                $production->feedbacks()->save($feedback);
            }
        }

        return redirect()->back();
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
//            $products = $products->where('type', $type);
        }
        if ($type == 'service') {
            $productions = $productions->where('type', $type);
//            $products = $products->where('type', $type);
        }
        if ($type == 'product') {
            $productions = $productions->where('type', $type);
//            $products = $products->where('type', $type);
        }

        $productions = $productions->map(function ($item) {
            return new Production($item->only(['id', 'slug', 'logo', 'title', 'views']));
        });

        $productions = $productions->paginate(16);

        return response()->json([
            'html' => view('productions.list', [
                'productions' => $productions,
            ])->render(),
            'productions' => $productions,
            'count' => count($productions),
            'filters' => $request->query->all(),
//            'products' => $products,
        ]);
    }
}
