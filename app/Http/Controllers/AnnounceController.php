<?php

namespace App\Http\Controllers;

use App\Announce;
use App\Notifications\UserCreated;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.announce.index', [
            'announces' => auth()->user()->announces,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.announce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->type;

        if ($type == 'profile') {
            $announce = Announce::create([
                'name' => auth()->user()->name,
                'content' => $request->bid,
                'code' => '',
                'phone' => auth()->user()->phone,
                'email' => auth()->user()->email ? auth()->user()->email : ' ',
                'user_id' => auth()->id(),
            ]);

            return redirect()->route('profile.announce.index');
        }
        $data = $request->all();
        $data['phone'] = str_replace('+', '', $data['code']).preg_replace('/[-\s]/', '', $data['phone']);
        $validated = Validator::make($data, [
            'name' => 'string',
            'phone' => 'unique:users',
        ]);
        $pass = rand(11111111, 99999999);
        $verification = rand(111111, 999999);
        $user = User::create([
            'role_id' => 4,
            'phone' => $data['phone'],
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => Hash::make($pass),
            'phone_verification' => $verification,
        ]);

        $announce = Announce::create([
            'name' => $data['name'],
            'content' => $data['bid'],
            'phone' => $data['phone'],
            'code' => $data['code'],
            'email' => $data['email'],
            'user_id' => $user->id,
        ]);

        $user->notify(new UserCreated($pass, $verification, $data['phone']));

        Session::flash('status', ['status' => 'success', 'message' => 'Мы создали для вас аккаунт! Вам отправлено письмо с данными на вашу электронную почту']);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Announce  $announce
     * @return \Illuminate\Http\Response
     */
    public function show(Announce $announce)
    {
        return view('announce.show', [
            'announce' => $announce,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Announce  $announce
     * @return \Illuminate\Http\Response
     */
    public function edit(Announce $announce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Announce  $announce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announce $announce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announce  $announce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announce $announce)
    {
        //
    }
}
