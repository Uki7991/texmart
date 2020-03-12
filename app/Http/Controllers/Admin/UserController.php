<?php

namespace App\Http\Controllers\Admin;

use Aloha\Twilio\Support\Laravel\Facade;
use App\Notifications\UserCreated;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Twilio\Exceptions\TwilioException;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.user.index');
    }

    public function datatable(Request $request)
    {
        $users = User::all();

        return Datatables::of($users)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('admin.user.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('admin.user.destroy', $model->id).'" data-id="'.$model->id.'" onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['phone'] = User::phoneReplacement($data['code'], $data['phone']);

        $validated = Validator::make($data, [
            'name' => 'string',
            'phone' => 'unique:users',
        ]);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated);
        }
        $pass = rand(11111111, 99999999);
        $password = Hash::make($pass);
        $verification = rand(111111, 999999);
        $user = User::create([
            'role_id' => 4,
            'phone' => $data['phone'],
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => $password,
            'phone_verification' => $verification,
        ]);
        try {
            Facade::message('+'.$data['phone'], "Ваш активационный код для сайта ".url('/').": ".$verification."\n Ваш пароль: ".$pass."\n Ваш логин: ".$data['phone']);
        } catch (TwilioException $exception) {
            Log::alert($exception->getMessage());
        }
        Notification::send($user, new UserCreated($pass, $verification, $data['phone']));
        Session::flash('status', ['status' => 'success', 'message' => 'Пользователь создан! Пароль пользователя: '.$pass]);

        return redirect()->route('admin.user.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back();
    }
}
