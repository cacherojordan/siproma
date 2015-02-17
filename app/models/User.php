<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    protected $fillable = array('email', 'password', 'name');

    public static $auth_rules = array(
        'email' => 'required|email',
        'password' => 'required'
    );

    public static $register_rules = array(
        'email' => 'email|required|confirmed|unique:users',
        'email_confirmation' => 'required',
        'password' => 'required|confirmed|min:5',
        'password_confirmation' => 'required',
        'name' => 'required'
    );

}
