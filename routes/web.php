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
// 提交登录表单
Route::post('dologin','LoginController@dologin')->name('dologin');
// 显示后台
Route::get('admin','AdminController@admin')->name('admin');
// 显示后台桌面
Route::get('welcome','WelcomeController@welcome')->name('welcome');
// 显示发帖
Route::get('list','ListController@list')->name('list');
// 显示轮播管理
Route::get('banner','BannerController@banner')->name('banner');
// 显示评论列表
Route::get('comment','CommentController@comment')->name('comment');
// 显示会员列表
Route::get('member','MemberController@member')->name('member');
// 显示管理员列表
Route::get('adminlist','AdminlistController@adminlist')->name('adminlist');
// 显示修改管理员页面
Route::get('adminedit','AdmineditController@adminedit')->name('adminedit');
// 显示角色管理
Route::get('role','RoleController@role')->name('role');
// 显示权限分类
Route::get('cate','CateController@cate')->name('cate');
// 显示权限管理
Route::get('rule','RuleController@rule')->name('rul
e');
// 显示系统设置
Route::get('set','SetController@set')->name('set');
// 显示屏蔽词
Route::get('shield','ShieldController@shield')->name('shield');
// 显示友情链接
Route::get('syslink','SyslinkController@syslink')->name('syslink');
// 显示问题添加页面
Route::get('add','AddController@add')->name('add');
// 显示问题修改页面
Route::get("edit","EditController@edit")->name('edit');
// 显示删除问题页面
Route::get("del","DelController@del")->name('del');
// 显示轮播添加页面
Route::get('banneradd','BanneraddController@banneradd')->name('banneradd');
// 显示修改轮播页面
Route::get('banneredit','BannereditController@banneredit')->name('banneredit');
// 显示会员添加页面
Route::get('memberadd','MemberaddController@memberadd')->name('memberadd');
// 显示管理员添加页面
Route::get('adminadd','AdminaddController@adminadd')->name('adminadd');
// 显示修改会员页面
Route::get('memberedit','MembereditController@memberedit')->name('memberedit');
// 显示修改会员修改密码页面
Route::get('password','PasswordController@password')->name('password');
// 显示角色添加页面
Route::get('roleadd','RoleaddController@roleadd')->name('roleadd');
// 显示角色修改页面
Route::get('roleedit','RoleeditController@roleedit')->name('roleedit');
// 显示权限分类修改页面
Route::get('cateedit','CateeditController@cateedit')->name('cateedit');
// 显示修改友情链接页面
Route::get('linkedit','LinkeditController@linkedit')->name('linkedit');