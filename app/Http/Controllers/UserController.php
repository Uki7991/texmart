<?php

namespace App\Http\Controllers;

use Aloha\Twilio\Support\Laravel\Facade;
use App\Announce;
use App\Category;
use App\Http\Requests\UpdateUserPassword;
use App\Production;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function children($item)
    {
        if (count($item->childs)) {
            $subs = [];
            foreach ($item->childs->only(['id', 'title']) as $child) {
                if (count($child->childs)) {
                    $this->children($child);
                }
                $subs[] = $child->only(['id', 'title']);
            }
            return $item->only(['id', 'title']);
        }
        return $item->only(['id', 'title']);
    }

    public function getCategories()
    {
        $categories = Category::where('parent_id', null)->get(['id', 'title']);

        $categories = $categories->each(function ($item) {
            $this->children($item);
        });

        return response()->json($categories);
    }

    public function index()
    {
        return redirect()->route('profile.dashboard');
    }

    public function dashboard(Request $request)
    {
        $productions = Production::where('user_id', auth()->user()->id)->get();
//        $categories = Category::where('parent_id', null)->get(['id', 'title']);
//        $types = Type::all();
//        $productionCats = collect();
//        $productCats = collect();
//        $serviceCats = collect();
//        foreach ($types as $type) {
//            if ($type->title == 'Производство') {
//                $productionCats = $productionCats->merge($type->categories);
//            }
//            if ($type->title == 'Услуги') {
//                $serviceCats = $serviceCats->merge($type->categories);
//            }
//            if ($type->title == 'Товары') {
//                $productCats = $productCats->merge($type->categories);
//            }
//        }

        if (auth()->user()->role_id == 4) {
            $announces = Announce::all()->sortByDesc('id');
        } else {
            $announces = Production::all()->sortByDesc('id');
        }

        $user = auth()->user();
        return view('profile.profile', [
            'user' => $user,
            'productions' => $productions,
            'announces' => $announces->paginate(5),
//            'productionCats' => $productionCats->sortBy('order'),
//            'productCats' => $productCats->sortBy('order'),
//            'serviceCats' => $serviceCats->sortBy('order'),
        ]);
    }

    public function edit(Request $request, User $user)
    {
        $user->name = $request->name;
        if ($request->avatar) {
            $fileName = 'users/'.uniqid('user_').'.jpg';

            $file = ImageManagerStatic::make($request->avatar);
            if ($request->width && $request->height) {

                $top = $request->top;
                $left = $request->left;
                $width = $request->width;
                $height = $request->height;

                $file = $file->crop((int)$width, (int)$height, (int)$left, (int)$top);
            }

            $file = $file->stream('jpg', 40);
            Storage::disk('local')->put('public/'.$fileName, $file);
            $user->avatar = $fileName;
        }

        $user->save();

        return redirect()->back();
    }

    public function settings(Request $request)
    {
        return view('profile.settings', [
            'user' => $request->user(),
        ]);
    }

    public function favorites(Request $request)
    {
        return view('user-production.profile-tabs.favorite', [
            'user' => $request->user(),
        ]);
    }

    public function productions(Request $request)
    {
        return view('user-production.profile-tabs.announce', [
            'user' => $request->user(),
            'productions' => $request->user()->productions,
        ]);
    }

    public function productionCreate(Request $request)
    {
        $types = Type::all();
        $productionCats = collect();
        foreach ($types as $type) {
            if ($type->title == 'Производство') {
                $productionCats = $productionCats->merge($type->categories);
            }
        }

        return view('user-production.form-tabs.production-create', [
            'productionCats' => $productionCats,
            'user' => $request->user(),
        ]);
    }

    public function productCreate(Request $request)
    {
        $types = Type::all();
        $productCats = collect();
        foreach ($types as $type) {
            if ($type->title == 'Товары') {
                $productCats = $productCats->merge($type->categories);
            }
        }

        return view('user-production.form-tabs.product-create', [
            'productCats' => $productCats,
            'user' => $request->user(),
        ]);
    }

    public function serviceCreate(Request $request)
    {
        $types = Type::all();
        $serviceCats = collect();
        foreach ($types as $type) {
            if ($type->title == 'Услуги') {
                $serviceCats = $serviceCats->merge($type->categories);
            }
        }

        return view('user-production.form-tabs.service-create', [
            'serviceCats' => $serviceCats,
            'user' => $request->user(),
        ]);
    }

    public function editPassword(UpdateUserPassword $request, User $user)
    {
        $validated = $request->validated();

        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()->back();
    }

    public function registerPhone(Request $request)
    {
        $data = $request->toArray();
        $data['phone'] = str_replace('+', '', $data['code']).preg_replace('/[ -]/', '', $data['phone']);
        $validator = Validator::make($data, [
            'code' => 'required|string',
            'phone' => 'required|string|unique:users',
        ]);
        $user = auth()->user();
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        } else {
            $user->phone_verification = rand(111111, 999999);
            $user->phone = $data['phone'];
            $user->save();
            Facade::message('+'.$data['phone'], 'Ваш активационный код для сайта texmart.kg: '.$user->phone_verification.'');
//            auth()->user()->phone = $data['phone'];
//            auth()->user()->save();
        }

        return redirect()->route('homepage');
    }

    public function reRegisterPhone(Request $request)
    {
        $user = auth()->user();

        $user->phone = '';
        $user->save();
        $data = $request->toArray();
        $data['phone'] = str_replace('+', '', $data['code']).preg_replace('/[ -]/', '', $data['phone']);
        $validator = Validator::make($data, [
            'code' => 'required|string',
            'phone' => 'required|string|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        } else {
            $user->phone_verification = rand(111111, 999999);
            $user->phone = $data['phone'];
            $user->save();
            Facade::message('+'.$data['phone'], 'Ваш активационный код для сайта texmart.kg: '.$user->phone_verification.'');
//            auth()->user()->phone = $data['phone'];
//            auth()->user()->save();
        }

        return redirect()->route('homepage');
    }

    public function codeVerification(Request $request)
    {
        $data = $request->toArray();
        $validator = Validator::make($data, [
            'code_verification' => 'required|string',
        ]);

        $user = auth()->user();

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($user->phone_verification == $data['code_verification']) {
                $user->phone_verification = null;
                $user->save();

                Session::flash('status', ['status' => 'success', 'message' => 'Ваш аккаунт успешно активирован']);
            } else {
                Session::flash('status', ['status' => 'fail', 'message' => 'Ваш аккаунт не активирован']);
            }

            return redirect()->route('homepage');
        }
    }
}
