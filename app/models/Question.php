<?php

class Question extends \Eloquent {
    protected $table = 'questions';
    protected $fillable = ['question', 'event_id', 'user_id'];


    public static $rules = [
        'question' => 'required',
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