<?php

Route::get('/', array('as' => 'home', 'uses' => Auth::check() ? 'DefaultController@dashboard' : 'DefaultController@index'));
Route::get('login', array('as' => 'home', 'uses' => Auth::check() ? 'DefaultController@dashboard' : 'DefaultController@index'));
Route::post('login', array('as' => 'login', 'uses' => 'DefaultController@login'));
Route::get('logout', array('as' => 'logout', 'uses' => 'DefaultController@logout'));

Route::group(array('before' => 'auth'), function() {
    Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DefaultController@dashboard'));
});