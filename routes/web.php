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

//TOPページ
Route::get('home','companycontroller@add');


//会社情報入力関係

Route::get('input','companyController@index');
// Route::post('input','companyController@company');
// Route::post('thnks','companyController@thnks');


//送信完了後
Route::get('send','companyController@send');
Route::post('send','companyController@post');

//会社のアイディア管理者画面
Route::get('manage','ideacontroller@display');

//会社はここまで・・・・・・・・・・・・・・・・・・・・・・・・・・・



//アイディア入力関係のルート
//入力画面
Route::get('idea/input','ideacontroller@index');




//thnks画面のルート
Route::post('idea/thnks','ideacontroller@thnks');


Route::post('idea/add','ideacontroller@post');
Route::get('idea/add','ideacontroller@add');