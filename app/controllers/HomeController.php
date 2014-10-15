<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin()
	{
		return View::make('login.login');
	}

    public function doLogin()
    {
        $rules = array(
            'email' => 'required|email', // varmistaa että sähköposti on oikeasti sähköposti
            'password' => 'required|alphaNum|min:3' //varmistaa, että aplhanumeerinen sekä enemmän kuin 3 merkkiä
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else{
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
        }
        if(Auth::attempt($userdata)){
            return Redirect::to('/');
        }else{
            return Redirect::to('login');
        }

    }
    public function doLogout(){
        //logout function goes here

    }

}
