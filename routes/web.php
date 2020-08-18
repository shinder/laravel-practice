<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

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
    return view('home', [
        'name' => 'David'
    ]);
});
Route::get('/db01', function () {
    $customers = DB::select("SELECT * FROM customers ORDER BY `客戶編號` DESC LIMIT 5");
    return $customers;
})->name('db01');

Route::get('/try-layout01', function () {
    return view('try01');
});

Route::get('/get-qs', 'RequestController@getQueryString');
Route::post('/try-post', 'RequestController@getPost');

Route::get('/customers', 'RequestController@findCustomers');

Route::resource('customer', 'CustomerController');

Route::resource('product', 'ProductController');
