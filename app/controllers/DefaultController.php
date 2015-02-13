<?php

class DefaultController extends \BaseController{

    public function getIndex() {
        return View::make('index');
    }

} 