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

Route::get('/','App\Http\Controllers\Admin\FrontendController@index');


Route::get('/admin', function () {
    return view('admin.dashboard');
});

















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth','admin']], function(){ 

Route::get('/dashboard','App\Http\Controllers\Admin\DashboardController@dashboard');


//route for user management
Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered');
Route::post('/save-register','App\Http\Controllers\Admin\DashboardController@registerstore');
Route::get('/role-edit/{id}','App\Http\Controllers\Admin\DashboardController@registeredit');
Route::put('/role-register-update/{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');
Route::delete('/role-delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');




//route for post
Route::get('/dashboard','App\Http\Controllers\Admin\PostController@index');
Route::post('/save-post','App\Http\Controllers\Admin\PostController@store');
Route::get('/post-edit/{id}','App\Http\Controllers\Admin\PostController@edit');
Route::put('/post-update/{id}','App\Http\Controllers\Admin\PostController@update');
Route::delete('/post-delete/{id}','App\Http\Controllers\Admin\PostController@destroy');



});