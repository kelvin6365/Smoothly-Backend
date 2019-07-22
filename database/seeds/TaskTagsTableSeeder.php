<?php

use Illuminate\Database\Seeder;

class TaskTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_tags')->delete();
        DB::table('task_tags')->insert([
            'name'=>'Project1',
        ]);
        DB::table('task_tags')->insert([
            'name'=>'Project2',
        ]);
        DB::table('task_tags')->insert([
            'name'=>'Must',
        ]);
    }
}
