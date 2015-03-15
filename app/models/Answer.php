<?php

class Answer extends \Eloquent {
    protected $table = 'answers';


    public function question() {
    	return $this->belongsTo('Question');
    }

}