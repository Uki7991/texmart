<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $productions = \App\Production::all();
    return view('welcome', [
        'productions' => $productions,
    ]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('productions', 'ProductionController@index')->name('productions.index');
Route::get('productions/create', 'ProductionController@create')->name('productions.create');
Route::post('productions', 'ProductionController@store')->name('productions.store');
Route::get('productions/{slug}', 'ProductionController@show')->name('productions.show');
Route::get('productions/{production}', 'ProductionController@edit')->name('productions.edit');
Route::patch('productions/{production}', 'ProductionController@update')->name('productions.update');
Route::delete('productions/{production}', 'ProductionController@destroy')->name('productions.destroy');

Route::get('/feedback',function (){
    return view('feadback');
})->name('feedback');

Route::get('/traffic',function (){
    return view('traffic');
})->name('traffic');

Route::get('/news',function (){
   return view('news');
})->name('news');

Route::get('/chat',function (){
   return view('chat');
})->name('chat');

Route::get('profile',function(){
    return view('profile');
})->name('profile');

Route::get('favorite', 'FavoriteController@index')->name('favorite');
