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
    return view('index.index');
});
// 显示关于我的页面
Route::get('about','AboutController@about')->name('about');
// 显示文章的详情页
Route::get('info','InfoController@info')->name('info');
// 显示主页
Route::get('index','IndexController@index')->name('index');
// 显示历史发帖
Route::get('time','TimeController@time')->name('time');