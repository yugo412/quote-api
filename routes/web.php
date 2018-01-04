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
    $quote = \App\Quote::inRandomOrder()->first();

    return view('welcome', compact('quote'));
});

Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
    Route::get('quote/import', 'QuoteController@import');
});
