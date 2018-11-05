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

Route::get('/announcement', function () {
    return view('landingpage/announcement');
});
Route::get('/', 'IndexController@index');
Route::get('/loc/{lang}', 'IndexController@lang');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Admin Page
Route::group(['prefix'=>'admin','middleware'=> 'auth.admin'],function (){
	Route::get('/', 'Admin\AdminController@index');
	Route::group(['prefix'=>'homepage'],function(){
		Route::post('/page1', 'Admin\AdminController@page1');
		Route::post('/brand', 'Admin\AdminController@brand');
		Route::post('/page2', 'Admin\AdminController@page2');
		Route::post('/page3', 'Admin\AdminController@page3');
		Route::post('/page4', 'Admin\AdminController@page4');
		Route::post('/page5', 'Admin\AdminController@page5');
		Route::post('/page5/advisor', 'Admin\AdminController@page5_advisor');
		Route::get('/page5/advisor/{id}', 'Admin\AdminController@page5_advisor_edit');
		Route::post('/page5/advisor/{id}', 'Admin\AdminController@page5_advisor_update');
		Route::get('/page5/advisor/{id}/delete', 'Admin\AdminController@page5_advisor_delete');

		Route::post('/page6', 'Admin\AdminController@page6');
		Route::post('/page6/partner', 'Admin\AdminController@page6_partner');
		Route::get('/page6/partner/{id}', 'Admin\AdminController@page6_partner_edit');
		Route::post('/page6/partner/{id}', 'Admin\AdminController@page6_partner_update');
		Route::get('/page6/partner/{id}/delete', 'Admin\AdminController@page6_partner_delete');
	});

	Route::group(['prefix'=>'announcement'], function(){
		Route::get('/','Admin\AnnouncementController@index');
		Route::post('/create', 'Admin\AnnouncementController@create');
		Route::get('/{id}', 'Admin\AnnouncementController@show');
		Route::post('/edit/{id}', 'Admin\AnnouncementController@edit');
		Route::get('/delete/{id}', 'Admin\AnnouncementController@delete');
	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('/', 'Admin\UserController@index');
		Route::get('/export', 'Admin\UserController@export');
		Route::post('/role/{id}', 'Admin\UserController@role');
		Route::get('/dashboard', 'Admin\Usercontroller@dashboard');
	});
});
// User Control
Route::group(['prefix' => 'user', 'middleware' => 'auth.user'], function(){
	Route::get('/', 'UserController@index');
	Route::get('/referral', 'UserController@referral_index');
	Route::get('/kyc', 'UserController@kyc')->middleware('kyc');
	Route::get('/profile', 'UserController@profile');
	Route::post('/profile', 'UserController@save_profile');
	Route::get('/kyc/1', 'UserController@kyc_image')->middleware('kyc1');
	Route::post('/kyc/1', 'UserController@kyc_step1');
	Route::get('/kyc/2', 'UserController@kyc_selfie')->middleware('kyc2');
	Route::post('/kyc/2', 'UserController@kyc_step2');
});
// Moderator Panel
Route::group(['prefix' => 'mod', 'middleware' => 'auth.mod'], function(){
	Route::get('/', 'ModController@index');
	Route::get('/{id}', 'ModController@show');
	Route::get('kyc/{id}', 'ModController@verify_kyc');
});
Route::get('/referral', 'UserController@referral');
Route::get('/verify/{token}', 'UserController@verify');

