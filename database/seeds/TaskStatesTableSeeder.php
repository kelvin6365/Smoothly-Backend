<?php

use Illuminate\Database\Seeder;

class TaskStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_states')->delete();
        DB::table('task_states')->insert([
            'name'=>'WORKING',
        ]);
        DB::table('task_states')->insert([
            'name'=>'BLOCK',
        ]);
        DB::table('task_states')->insert([
            'name'=>'DONE',
        ]);
    }
}
