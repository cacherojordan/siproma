<?php

class DefaultController extends \BaseController{

    public function index() {
        return View::make('index');
    }

    public function login() {
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

    public function logout() {
        Auth::logout();
        return Redirect::route('home');
    }

    public function dashboard() {
        return View::make('dashboard');
    }

} 