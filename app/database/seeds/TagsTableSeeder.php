<?php

class TagsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('tags')->delete();

        $tags = array(
        	array(
        		'name' => 'testing'
        	),
        );

        // Uncomment the below to run the seeder
        DB::table('tags')->insert($tags);
    }

}