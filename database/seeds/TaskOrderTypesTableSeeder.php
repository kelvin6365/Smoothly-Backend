<?php

use Illuminate\Database\Seeder;

class TaskOrderTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_order_types')->delete();
        DB::table('task_order_types')->insert([
            'name'=>'HIGH',
        ]);
        DB::table('task_order_types')->insert([
            'name'=>'MEDIUM',
        ]);
        DB::table('task_order_types')->insert([
            'name'=>'LOW',
        ]);
    }
}
