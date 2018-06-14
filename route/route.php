<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;
Route::get('/admin/index','admin/index/index');
Route::get('/admin/login','admin/login/login');
Route::get('/admin/welcome','admin/index/welcome');
Route::resource('article','admin/article');
Route::post('/article/sum','admin/article/delSum');
Route::resource('cate','admin/category');
Route::resource('slide/list','admin/slide');
Route::get('/slide/show','admin/slide/read');
Route::get('/slide/add','admin/slide/create');
Route::resource('comments/list','admin/comments');
Route::get('comments/feedback','admin/comments/feedback');
Route::post('/admin/checkLogin','admin/login/check');
Route::rule('/admin/captcha','admin/login/captcha');
Route::rule('/admin/logout','admin/login/logout');
Route::post('/admin/uploadArticleImage','admin/uploadfile/articleImage');
Route::resource('admin/list','admin/admin');


Route::get('/','home/index/index');
Route::get('list/cid/:cid','home/article/articleList');
Route::get('detail/aid/:aid','home/article/detail');
Route::get('/au3','home/article/au3');
Route::get('/tag/:tag','home/article/getTagArt');
Route::post('/comment','home/article/comment');