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


Route::get('/', ['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('/noPermission', function(){
		return view('permission.noPermission');

});

Route::group(['middleware'=>['authen']],function(){
	Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
});



Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function()
{

	Route::get('/admin-dashboard',['as'=>'dashboard','uses'=>'admin\adminController@admin_dashboard']);
	Route::get('/admin-set-student',['as'=>'admin_setup_student','uses'=>'admin\adminController@admin_setup_student']);

		
});

