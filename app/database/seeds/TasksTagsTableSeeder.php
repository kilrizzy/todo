<?php

class TasksTagsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('tasks_tags')->delete();

        $tasks_tags = array(
        	array(
        		'task_id' => 1,
        		'tag_id' => 1
        	),
        );

        // Uncomment the below to run the seeder
        DB::table('tasks_tags')->insert($tasks_tags);
    }

}