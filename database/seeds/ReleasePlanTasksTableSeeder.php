<?php

use Illuminate\Database\Seeder;

class ReleasePlanTasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('release_plan_tasks')->delete();
        DB::table('release_plan_tasks')->insert([
            'task_id'=>'1',
            'release_plan_id'=>'1',
        ]);
        DB::table('release_plan_tasks')->insert([
            'task_id'=>'3',
            'release_plan_id'=>'3',
        ]);
        DB::table('release_plan_tasks')->insert([
            'task_id'=>'34',
            'release_plan_id'=>'2',
        ]);
    }
}
