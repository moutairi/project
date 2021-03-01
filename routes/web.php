<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{name}' , function($name) {

return 'name:'.$name ;
});
//prefex route
Route::group(['prefix' => 'admin'],function () {
    Route::get('profile', function () {
        return 'hi';
    });


Route::resource('news','NewController');
Route::get('news','NewController@show');
Route::get('news','NewController@create');
Route::get('news','NewController@edit');





    Route::get('profile1', function () {
        return 'seconde route';
    });

    Route::get('profile2', function () {
        return 'troiséme route';
    });


});
Route::get('/me', function(){
    return view('me');
});
//route redirect to a view
Route::get('/me', function(){
    return view('me');
});


