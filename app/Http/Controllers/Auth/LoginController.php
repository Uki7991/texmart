<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        if ($user->email) {
            $existingUser = User::where('email', $user->email)->where('social_type', $provider)->where('social_id', $user->id)->get()->first();
        } else {
            $existingUser = User::where('email', Str::slug($user->name))->where('social_type', $provider)->where('social_id', $user->id)->get()->first();
        }

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            if ($user->email) {
                $emailUser = User::where('email', $user->email)->get()->first();
            } else {
                $emailUser = User::where('email', Str::slug($user->name))->get()->first();
            }
            if ($emailUser) {
                $session = [
                    'status' => 'error',
                    'message' => 'Пользователь с таким e-mail уже существует',
                ];
                Session::flash('flash', $session);
                return redirect()->route('login');
            }

            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email ? $user->email : Str::slug($user->name);
            $newUser->social_id = $user->id;
            $newUser->social_type = $provider;
            $newUser->password = Hash::make($user->email);
            $newUser->save();

            auth()->login($newUser, true);
        }

        return redirect()->route('homepage');
    }

    public function attemptLogin(Request $request)
    {
        return Auth::attempt(['phone' => $request->email, 'password' => $request->password])
            || Auth::attempt(['email' => $request->email, 'password' => $request->password]);
    }
}
