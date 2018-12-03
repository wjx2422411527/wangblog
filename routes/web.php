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
// 显示登录页
Route::get('login','LoginController@login')->name('login');
// 显示后台
Route::get('admin','AdminController@admin')->name('admin');
// 显示后台桌面
Route::get('welcome','WelcomeController@welcome')->name('welcome');
// 显示发帖
Route::get('list','ListController@list')->name('list');
// 显示显示轮播管理
Route::get('banner','BannerController@banner')->name('banner');
// 显示显示评论列表
Route::get('comment','CommentController@comment')->name('comment');
// 显示显示会员列表
Route::get('member','MemberController@member')->name('member');
// 显示显示管理员列表
Route::get('adminlist','AdminlistController@adminlist')->name('adminlist');
// 显示角色管理
Route::get('role','RoleController@role')->name('role');
// 显示权限分类
Route::get('cate','CateController@cate')->name('cate');
// 显示权限管理
Route::get('rule','RuleController@rule')->name('rule');
// 显示系统设置
Route::get('set','SetController@set')->name('set');
// 显示屏蔽词
Route::get('shield','ShieldController@shield')->name('shield');
// 显示友情链接
Route::get('syslink','SyslinkController@syslink')->name('syslink');
// 显示问题添加页面
Route::get('add','AddController@add')->name('add');
// 显示轮播添加页面
Route::get('banneradd','BanneraddController@banneradd')->name('banneradd');
// 显示会员添加页面
Route::get('memberadd','MemberaddController@memberadd')->name('memberadd');
// 显示管理员添加页面
Route::get('adminadd','AdminaddController@adminadd')->name('adminadd');
// 显示角色添加页面
Route::get('roleadd','RoleaddController@roleadd')->name('roleadd');