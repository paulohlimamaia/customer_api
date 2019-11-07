<?php

use App\Customer;

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
    return view('welcome', ['customers' => Customer::all()]);
});

Route::get('/customer/{id}', function($id) {
    return view('details', ['customer' => Customer::find($id)]);
});