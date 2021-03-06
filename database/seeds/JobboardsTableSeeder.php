<?php

use Illuminate\Database\Seeder;

class JobboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobboards')->delete();
        DB::table('jobboards')->insert([
            'name'=>'test1',
            'description'=>'This is a test',
            'active'=>'1',
        ]);
        DB::table('jobboards')->insert([
            'name'=>'test2',
            'description'=>'This is a test2',
            'active'=>'0',
        ]);
    }
}
