<?php

class DefaultController extends \BaseController{

    /*
     * Login / Logout
     */

    public function getLogin() {
        return View::make('index');
    }

    public function postLogin() {
        $data = Input::all();

        $validator = Validator::make($data, User::$auth_rules);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), true)) {
            return Redirect::intended('dashboard');
        }

        return Redirect::route('home')->with('message', "Incorrect Email or Password");
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::route('home');
    }

    /*
     * Register
     */

    public function getRegister() {
        return View::make('register');
    }

    public function postRegister() {
        $data = Input::all();

        $validator = Validator::make($data, User::$register_rules);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        Mail::send('emails.welcome', array('name' => Input::get('name')), function($message)
        {
            $message->to(Input::get('email'), Input::get('name'))->subject('Welcome!');
        });

        echo "Registration Success";
//        return Redirect::route('home')->with('message', "Incorrect Email or Password");
    }

} 