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

   $histoires =  \App\Histoire::latest()->take(10)->get();
    return view('welcome', compact('histoires'));
});


Route::get('/customer/print-pdf', [ 'as' => 'customer.printpdf', 'uses' => 'CustomerController@printPDF']);
Route::get('/print/{debut}/{fin}', [ 'as' => 'print', 'uses' => 'CustomerController@print']);
