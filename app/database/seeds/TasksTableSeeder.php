<?php

class TasksTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('tasks')->delete();

        $tasks = array(
        	array(
        		'user_id' => 1,
        		'name' => "Finish the TODO app",
        		'details' => "Work out all the bugs and junk",
        		'notes' => "Waiting on videogames",
        		'date_due' => "2014-02-26 08:30:00",
        		'private' => 0,
        		'alarm' => '',
        		'status' => 'urgent',
        	),
        );

        // Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }

}