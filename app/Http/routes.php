<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index');

Route::get('/profile/{id}', 'ProfileController@show');

Route::get('/student', 'StudentController@index');
Route::get('/student/add', 'StudentController@addUser');
Route::get('/student/search', 'StudentController@searchUser');

Route::get('/invoices', 'InvoiceController@index');

Route::get('/register-counsellor', [
    'uses' => 'AuthController@index',
    'as'   => 'counsellor_show_path',
]);

Route::post('/register-counsellor', [
    'uses' => 'AuthController@store',
    'as'   => 'counsellor_store_path'
]);
