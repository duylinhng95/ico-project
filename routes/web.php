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

Route::get('/test', function () {
    return view('landingpage/announcement');
});
Route::get('/', 'IndexController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Admin Page
Route::group(['prefix'=>'admin','middleware'=> 'auth.admin'],function (){
	Route::get('/', 'AdminController@index');
	Route::group(['prefix'=>'homepage'],function(){
		Route::post('/page1', 'AdminController@page1');
		Route::post('/brand', 'AdminController@brand');
		Route::post('/page2', 'AdminController@page2');
		Route::post('/page3', 'AdminController@page3');
		Route::post('/page4', 'AdminController@page4');
		Route::post('/page5', 'AdminController@page5');
		Route::post('/page5/advisor', 'AdminController@page5_advisor');
		Route::get('/page5/advisor/{id}', 'AdminController@page5_advisor_edit');
		Route::post('/page5/advisor/{id}', 'AdminController@page5_advisor_update');
		Route::get('/page5/advisor/{id}/delete', 'AdminController@page5_advisor_delete');

		Route::post('/page6', 'AdminController@page6');
		Route::post('/page6/partner', 'AdminController@page6_partner');
		Route::get('/page6/partner/{id}', 'AdminController@page6_partner_edit');
		Route::post('/page6/partner/{id}', 'AdminController@page6_partner_update');
		Route::get('/page6/partner/{id}/delete', 'AdminController@page6_partner_delete');
	});

	Route::group(['prefix'=>'announcement'], function(){
		Route::get('/','AnnouncementController@index');
		Route::post('/create', 'AnnouncementController@create');
		Route::get('/{id}', 'AnnouncementController@show');
		Route::post('/edit/{id}', 'AnnouncementController@edit');
		Route::get('/delete/{id}', 'AnnouncementController@delete');
	});
});
// User Control
Route::get('/verify/{token}', 'UserController@verify');