<?php

use Illuminate\Database\Seeder;

class SprintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sprints')->delete();
        DB::table('sprints')->insert([
            'jobboard_id'=>'1',
            'name'=>'sprint 1',
            'sprint_type_id'=>'1',
            'start_date'=>'2019-07-06 19:55:50',
            'end_date'=>'2099-07-06 19:55:50',
        ]);
        DB::table('sprints')->insert([
            'jobboard_id'=>'1',
            'name'=>'sprint 1 backlog',
            'sprint_type_id'=>'2',
            'start_date'=>'2019-07-06 19:55:50',
            'end_date'=>'2099-07-06 19:55:50',
        ]);
    }
}
