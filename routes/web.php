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

Route::get('/', 'MainController@index')->name('homepage');
Route::get('/image', function () {
    return view('image-resizer');
});
Route::post('/image/resize', 'MainController@imageResize')->name('image.resize');

Route::get('/profile', 'UserController@index')->name('profile');
Route::put('/user/edit/{user}', 'UserController@edit')->name('user.edit');
Route::put('/user/password/edit/{user}', 'UserController@editPassword')->name('user.password.edit');
Route::get('/get-categories', 'UserController@getCategories')->name('get.categories');

Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->name('google.redirect');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('google.callback');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/message', 'HomeController@message')->name('message');

    Route::get('/favorite', 'FavoriteController@index')->name('favorite');
});

Route::get('/search', 'MainController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('productions', 'ProductionController@index')->name('productions.index');
Route::get('productions/filter', 'ProductionController@filter')->name('productions.filter');
Route::get('productions/create', 'ProductionController@create')->name('productions.create');
Route::post('productions', 'ProductionController@store')->name('productions.store');
Route::get('productions/rate', 'ProductionController@rate')->name('productions.rate');
Route::get('productions/{slug}', 'ProductionController@show')->name('productions.show');
Route::get('productions/{production}', 'ProductionController@edit')->name('productions.edit');
Route::patch('productions/{production}', 'ProductionController@update')->name('productions.update');
Route::delete('productions/{production}', 'ProductionController@destroy')->name('productions.destroy');
Route::post('bid', 'MainController@storeBid')->name('bid.store');

Route::get('/feedback',function (){
    return view('feadback');
})->name('feedback');

Route::get('/traffic',function (){
    return view('traffic');
})->name('traffic');

Route::get('/news',function (){
   return view('news');
})->name('news');

Route::get('announcement',function(){
    return view('announcement.announcement');
})->name('announcement');

Route::get('/about',function(){
    return view('about_us');
})->name('about_us');

Route::get('/product',function(){
    return view('products');
})->name('products');

Route::get('/workshop',function(){
    return view('workshops');
})->name('workshops');

Route::get('/about_us',function(){
    return view('about_us');
})->name('about_us');

Route::get('/consulting',function(){
    return view('consulting');
})->name('consulting');

Route::get('/consulting',function(){
    return view('consulting');
})->name('consulting');

Route::get('/logistic',function(){
    return view('logistic');
})->name('logistic');

Route::get('/quality',function(){
    return view('quality');
})->name('quality');

Route::get('/contacts',function(){
    return view('contacts');
})->name('contacts');

Route::get('/privacy',function(){
    return view('privacy');
})->name('privacy');

Route::get('/conditions',function(){
    return view('conditions');
})->name('conditions');

Route::get('/offer',function(){
    return view('offer');
})->name('offer');
