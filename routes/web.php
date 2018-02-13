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

Route::get('admin', 'AdminController@index')->name('admin.index');
Route::get('admin/article', 'AdminController@article')->name('admin.article');

Route::resource('article', 'ArticleController');

Route::get('site', 'SiteController@index')->name('site.index');
Route::get('site/about', 'SiteController@about')->name('site.about');