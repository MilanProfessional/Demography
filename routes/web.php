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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
Route::get('/login','Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/dashboard','AdminController@dashboard')->name('admin.dashboard');
});



//Route::get('/admin/add','StateController@add')->name('state.add.submit');
//Route::get('admin','LoginController@index');
//Route::post('admin/login','LoginController@signin');


Route::get('/admin/addstate','StateController@ShowForm')->name('state.add');
Route::post('/admin/addstate','StateController@add')->name('state.add.submit');
Route::get('/admin/states','StateController@index')->name('admin.states');
Route::get('/admin/statedetails/{id}','StateController@show')->name('admin.statedetail');
Route::get('/admin/updatestate/{id}','StateController@edit')->name('state.edit');
Route::post('/admin/updatestate','StateController@update')->name('state.edit.submit');