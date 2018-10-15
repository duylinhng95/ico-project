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
Route::get('/test', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=> 'auth.admin'],function (){
	Route::get('/', 'AdminController@index');
	Route::post('/homepage/data_without_url', 'AdminController@data_without_url');
	Route::post('/homepage/page2', 'AdminController@page2');
	Route::post('/homepage/page3', 'AdminController@page3');
	Route::post('/homepage/page4', 'AdminController@page4');
	Route::post('/homepage/page5', 'AdminController@page5');
	Route::post('/homepage/page5/advisor', 'AdminController@page5_advisor');
	Route::get('/homepage/page5/advisor/{id}', 'AdminController@page5_advisor_edit');
	Route::post('/homepage/page5/advisor/{id}', 'AdminController@page5_advisor_update');
	Route::get('/homepage/page5/advisor/{id}/delete', 'AdminController@page5_advisor_delete');

	Route::post('/homepage/page6', 'AdminController@page6');
	Route::post('/homepage/page6/partner', 'AdminController@page6_partner');
	Route::get('/homepage/page6/partner/{id}', 'AdminController@page6_partner_edit');
	Route::post('/homepage/page6/partner/{id}', 'AdminController@page6_partner_update');
	Route::get('/homepage/page6/partner/{id}/delete', 'AdminController@page6_partner_delete');
});