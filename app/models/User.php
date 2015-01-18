<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	// hax
	public static function rules($id=0) {
		$rules = [
			'username' => 'required|unique:users,username,'.$id,
			'password' => 'required|min:8',
			'firstname' => 'required',
			'surname' => 'required'
		];
		return $rules;
	}
	protected $fillable = [
		'username',
		'password',
		'firstname',
		'surname'
	];
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


	public function events() {
		return $this->hasMany('MyEvent');
	}

	public function teams() {
		return $this->belongsToMany('Team');
	}
}
