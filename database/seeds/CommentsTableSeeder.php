<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        DB::table('comments')->insert([
            'text'=>'HIGH',
            'user_id'=>2,
            'task_id'=>1,
        ]);
        DB::table('comments')->insert([
            'text'=>'TEXT',
            'user_id'=>3,
            'task_id'=>1,
        ]);
        DB::table('comments')->insert([
            'text'=>'TEST3',
            'user_id'=>20,
            'task_id'=>1,
        ]);
    }
}
