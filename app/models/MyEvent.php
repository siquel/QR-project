<?php

class MyEvent extends \Eloquent {
    protected $table = 'events';
	protected $fillable = ['title', 'description', 'user_id'];

    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'start' => 'required'
    ];

    public function user() {
        return $this->belongsTo('User');
    }

    public function questions() {
        return $this->hasMany('Question', 'event_id');
    }

    public function teams() {
        return $this->belongsToMany('Team', 'event_team', 'team_id', 'event_id');
    }
}