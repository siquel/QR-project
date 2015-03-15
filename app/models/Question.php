<?php

class Question extends \Eloquent {
    protected $table = 'questions';
    protected $fillable = [];


    public static $rules = [
        'question' => 'required',
        'answer' => 'required',
        'points' => 'integer',
        'event_id' => 'integer',
        'user_id' => 'integer'
    ];

    public function event() {
        return $this->belongsTo('MyEvent', 'event_id');
    }

    public function answers() {
        return $this->hasMany('Answer', 'question_id');
    }
}