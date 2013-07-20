<?php

class Tag extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function tasks()
    {
        return $this->belongsToMany('Task', 'tasks_tags', 'tag_id', 'task_id');
    }
}