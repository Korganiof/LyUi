<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::controller('/account', 'AccountController');

Route::get('/',function(){
    $title = "Everon";
   return View::make('layouts.master')
       ->with('title',$title);
});

Route::get('päähallinta', function(){
   return View::make('accounts.index');
});

Route::get('login', array('uses' => 'HomeController@showLogi'));

Route::post('login', array('uses' => 'HomeController@doLogin'));

