<?php

class MyEvent extends \Eloquent {
            protected $table = 'events';
	protected $fillable = [];


    public function user() {
        return $this->belongsTo('User');
    }

    public function questions() {
        return $this->hasMany('Question', 'event_id');
    }
}