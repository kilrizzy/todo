<?php

class TaskController extends BaseController {

    /* UPDATE USER FRONT */
    public function taskDisplay($id=false){
        $task = false;
        $fields = array(
            'name' => "",
            'details' => "",
            'notes' => "",
            'date_due' => "",
            'private' => "0",
            'alarm' => "",
            'status' => "",
        );
        if($id){
            $task = Task::find($id);
            $fields = array(
                'name' => $task->name,
                'details' => $task->details,
                'notes' => $task->notes,
                'date_due' => $task->date_due,
                'private' => $task->private,
                'alarm' => $task->alarm,
                'status' => $task->status,
            );
        }
        return View::make('tasks/task',array(
            'task' => $task, 
            'fields' => $fields, 
        ));
    }
    /* UPDATE USER PROCESS */
    public function taskProcess($id=false){
        if($id){
            $task = Task::find($id);
        }else{
            $task = new Task;
            $user = Auth::user();
            $task->user_id =  $user->id;
        }
        $task->name = Input::get('name');
        $task->details = Input::get('details');
        $task->notes = Input::get('notes');
        $task->date_due = Input::get('date_due');
        $task->private = Input::get('private');
        $task->alarm = Input::get('alarm');
        $task->status = Input::get('status');
        $task->save();
        return Redirect::to('/')->with('flash_notice', 'Task saved');
    }
    /* DELETE PERMISSION */
    public function taskDelete($id){
        $task = Task::find($id);
        $task->delete();
        return Redirect::to('/')->with('flash_notice', 'Task deleted');
    }
}