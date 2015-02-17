<?php

class MainController extends \BaseController{

    public function dashboard() {
        return View::make('main/dashboard');
    }

} 