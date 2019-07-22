<?php

use Illuminate\Database\Seeder;

class TaskTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_types')->delete();
        DB::table('task_types')->insert([
            'name'=>'BUG',
        ]);
        DB::table('task_types')->insert([
            'name'=>'TASK',
        ]);
        DB::table('task_types')->insert([
            'name'=>'STORY',
        ]);
    }
}
