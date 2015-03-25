<?php

class Team extends \Eloquent {
	protected $fillable = [];

	public function users() {
		return $this->belongsToMany('User');
	}

	public function events() {
		return $this->belongsToMany('MyEvent', 'event_team', 'team_id', 'event_id');
	}

	public function answered() {
		return $this->belongsToMany('Answer');
	}
}