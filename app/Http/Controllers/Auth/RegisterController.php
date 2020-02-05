<?php

namespace App\Http\Controllers\Auth;

use Aloha\Twilio\Support\Laravel\Facade;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['phone'] = User::phoneReplacement($data['code'], $data['phone']);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => ['required'],
            'code' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'role_id' => $data['user_type'] == 1 ? 5 : 4,
            'name' => $data['name'],
            'phone' => User::phoneReplacement($data['code'], $data['phone']),
            'password' => Hash::make($data['password']),
            'phone_verification' => rand(111111, 999999),
        ]);

        Facade::message('+'.User::phoneReplacement($data['code'], $data['phone']), 'Ваш активационный код для сайта texmart.kg: '.$user->phone_verification.'');

        return $user;
    }

    public function register(Request $request)
    {

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

//        $this->guard()->login($user);

        return response()->json($user);
    }

    public function codeVerification(Request $request)
    {
        $user = User::find($request->user['id']);
        $codeVerification = $request->code;

        if ($user->phone_verification != $codeVerification) {
            return response()->json(['message' => 'Введеный вами код не совпадает']);
        }

        $user->phone_verification = null;
        $user->save();
        $this->guard()->login($user);

        return response()->json('success');
    }
}
