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
Route::get('/',function(){
    $title = "Rahan hallinta";
   return View::make('layouts.master')
       ->with('title',$title);
});

Route::get('päähallinta', function(){
   return View::make('accounts.index');
});

Route::get('meidän-sivuhallinta', array('as' => 'sivuhallinta', function() // benefit of a named route is that even if you change the location of the route, as long as the name stays the same, the link will still work.
{
    return View::make('sivuhallinta.sivuhallinta');
}));

Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses'=> 'HomeController@doLogout'));

Route::get('blog/{category?}', function($category = null){
   if($category){
       $posts = Post::where('category', '=', $category);
   }else{
       $posts = Post::all();
   }
    return View::make('blog')
        ->with('posts',$posts);
});
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
   Route::get('dashboard', function(){
       return View::make('admin.dashboard');

   });
});

Route::get('posts', function(){
    return View::make('admin.posts');
});

Route::get('posts/create', function(){
   return View::make('admin.posts-create');

});

App::error(function($exception,$code){

switch($code)
{
    case 403:
        return Response::view('error.403', array(), 403);
    case 404:
        return Response::view('error.error', array(),404);
    case 500:
        return Response::view('error.500', array(), 500);
    default:
        return Response::view('error.default', array(), $code);
}
});

Route::get('yo', function(){
    return View::make ('yo');
});

Route::get('puppies/{cutelevel}', function($cutelevel){
    return 'this puppy is an absolute ' . $cutelevel . ' out of ' . $cutelevel;
});

Route::get('gallery/{category?}', function($category){
   if($category)
       return 'this is the ' . $category . ' section';
    else
        return 'these are all the photos.';
});





