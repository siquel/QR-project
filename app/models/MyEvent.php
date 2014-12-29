<?php

class MyEvent extends \Eloquent {
            protected $table = 'events';
	protected $fillable = ['name', 'user_id'];

    public static $rules = [
        'name' => 'required',
        'user_id' => 'integer'
    ];

    public function user() {
        return $this->belongsTo('User');
    }

    public function questions() {
        return $this->hasMany('Question', 'event_id');
    }
}