<?php

class AuthController extends BaseController {

	//LOGIN DISPLAY
	public function loginDisplay()
	{
		return View::make('auth/login');
	}
	//LOGIN PROCESS
	public function loginProcess(){
		//GET DATA
		$user = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);
		//ATTEMPT AUTH
		if (Auth::attempt($user)) {
			return Redirect::to('/')
			->with('flash_notice', 'You are successfully logged in.');
		}
	    // authentication fail
		return Redirect::to('login')
		->with('flash_error', 'Your username/password combination was incorrect.')
		->withInput();
	}
	//PROFILE DISPLAY
	public function profileDisplay()
	{
		return View::make('auth/profile');
	}
	/* USER UPDATE PROFILE*/
	public function profileProcess()
	{
		$rules = array(
		    'username' => 'Required|Min:3|Max:30|Alpha',
		    'email'     => 'Required|Between:5,150|Email',
		);
		//
		$dbuser = User::find(Auth::user()->id);
		//get user data
		$postuser = array(
			'username'=>Input::get('username'),
			'password'=>Input::get('password'),
			'email'=>Input::get('email'),
		);
		if(!empty($postuser['password'])){
			$dbuser->password = Hash::make($postuser['password']);
			$rules['password'] = 'Required|AlphaNum|Between:5,20';
		}
		//If email is different than existing
		if($dbuser->email != $postuser['email']){
			$rules['email'] .= '|Unique:users';
		}
		//run validation
		$validator = Validator::make($postuser, $rules);
		if( $validator->passes() ) {
			$dbuser->username = $postuser['username'];
			$dbuser->email = $postuser['email'];
			$dbuser->save();
			//return successful
			return Redirect::to('profile')->with('flash_notice', 'Profile saved successfully');
		} else { 
		    //Notify user error
		    return Redirect::to('profile')->withErrors($validator);
		}
		//
	}
	/* USER LOGOUT */
	public function logoutProcess(){
		Auth::logout();
		return Redirect::to('/')->with('flash_notice', 'You are successfully logged out.');
	}
}