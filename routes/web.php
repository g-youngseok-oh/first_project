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

// メイン
Route::get('/', 'IndexController@index');

// 会社
Route::get('/company', function () {
    return view('company');
});

// サービス
Route::get('/service', function () {
    return view('service');
});

// お問い合わせフォーム
Route::get('/contact', function () {
    return view('contact');
});

// メール送信
Route::get('/send/confirm', 'SendController@confirm');
Route::get('/send/complate', 'SendController@send');