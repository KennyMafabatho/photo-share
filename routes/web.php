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

 
Auth::routes();
Route::get('/','HomeController@index');
Route::post('/follow/{user}','FollowsController@store');
Route::get('/home','PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::delete('p/{post}','PostsController@delete');
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store');
Route::get('/profile', function(){
    return redirect('/profile/'.auth()->user()->id);
});
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');