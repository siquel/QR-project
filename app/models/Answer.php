<?php

class Answer extends \Eloquent {
    protected $table = 'answers';
    protected $fillable = ['answer', 'correct', 'question_id'];

    public function question() {
    	return $this->belongsTo('Question');
    }

    public function teamsWhoAnswered() {
    	return $this->belongsToMany('Team');
    }

}