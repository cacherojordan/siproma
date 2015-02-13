<?php

Route::get('/', array('as' => 'home', 'uses' => 'DefaultController@getIndex'));