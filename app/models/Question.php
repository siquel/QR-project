<?php

class Question extends \Eloquent {
    protected $table = 'questions';
    protected $fillable = [];

    public function event() {
        return $this->belongsTo('MyEvent', 'event_id');
    }
}