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
use App\User;
use App\Video;

Route::get('/', function () {
    return view('index');
});
/*****vistor**************/
Route::group(['middleware'=>'vistor'], function()
{
	Route::get('/', function () {
    return view('index');
});

Route::get('/register','RegisterController@register');
Route::post('/register','RegisterController@postRegister');

Route::get('/login','loginController@login');
Route::post('/login','loginController@postlogin');	
Route::get('forgout-password','ForgoutController@forgoutpass');

Route::post('forgout-password','ForgoutController@postforgout');

Route::get('/reset/{email}/{resetCode}','ForgoutController@resetPassword');
Route::post('/reset/{email}/{resetCode}','ForgoutController@postresetpassword');

Route::get('/activate/{email}/{activationCode}','ActivationController@activate');
});
/***********************************/
/***************formateur********************/
Route::group(['middleware'=>'formateur'], function()
{
Route::get('/formateurhome','FormateurController@home');
Route::get('/formateurformation','FormateurController@formation');
Route::get('/formateurvideos','FormateurController@videos');

Route::get('/pannel','FormateurController@videospannel');

Route::get('/show','FormateurController@showvideo');

Route::get('/gestion','FormateurController@gestion');

Route::get('/addvideo','FormateurController@addvideo');
Route::post('/addvideo','FormateurController@postaddvideo');	

Route::get('/test','FormateurController@show');

Route::get('/deletevideo/{id}',function($id){
	$video=Video::find($id);
	
	$video->delete();
	
	return redirect("/gestion");
});

});
/************************************************/
/************etudiant**************************/
Route::group(['middleware'=>'etudiant'], function()
{
Route::get('/etudianthome','EtudiantController@home');
Route::get('/etudiantformation','EtudiantController@formation');
Route::get('/etudiantvideos','EtudiantController@videos');

});
/********************************************/

/****************admin**********************/
Route::group(['middleware'=>'admin'], function()
{
Route::get('/adminhome','AdminController@home');
/*Route::get('/users','AdminController@viewproduct');*/
Route::get('/users','AdminController@users');
Route::get('/showvideos','AdminController@videos');

Route::get('/delete/{id}',function($id){
	$user=User::find($id);
	
	$user->delete();
	
	return redirect("/users");
});

Route::get('/deletevideoamdin/{id}',function($id){
	$video=Video::find($id);
	
	$video->delete();
	
	return redirect("/showvideos");
});

Route::get('/edit/{id}','AdminController@EditUser');
Route::post('/edit/{id}','AdminController@postEditUser');

Route::get('/adduser','AdminController@register');
Route::post('/adduser','AdminController@postRegister');

});
/******************************************/

Route::post('/logout','loginController@logout');

