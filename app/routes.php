<?php

Route::get('/', array('as' => 'home', 'uses' => Auth::check() ? 'DefaultController@dashboard' : 'DefaultController@getLogin'));
Route::get('login', array('as' => 'home', 'uses' => Auth::check() ? 'DefaultController@dashboard' : 'DefaultController@getLogin'));
Route::post('login', array('as' => 'login', 'uses' => 'DefaultController@postLogin'));
Route::get('logout', array('as' => 'logout', 'uses' => 'DefaultController@getLogout'));

Route::get('register', array('as' => 'register.get', 'uses' => 'DefaultController@getRegister'));
Route::post('register', array('as' => 'register.post', 'uses' => 'DefaultController@postRegister'));

Route::group(array('before' => 'auth'), function() {
    Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'MainController@dashboard'));

});