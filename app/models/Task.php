<?php

class Task extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function tags()
    {
        return $this->belongsToMany('Tag', 'tasks_tags', 'task_id', 'tag_id');
    }
    public function user()
    {
        return $this->belongsTo('User');
    }
}