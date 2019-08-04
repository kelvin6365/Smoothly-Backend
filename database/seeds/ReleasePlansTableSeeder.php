<?php

use Illuminate\Database\Seeder;

class ReleasePlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('release_plans')->delete();
        DB::table('release_plans')->insert([
            'name'=>'Release1',
            'description'=>'This is Release1',
            'tag'=>'product1',
            'start_date'=>'2019-07-30 22:34:18',
            'end_date'=>'2019-08-30 22:34:18',
            'jobboard_id'=>'1'
        ]);
        DB::table('release_plans')->insert([
            'name'=>'Release2',
            'description'=>'This is Release1',
            'tag'=>'product2',
            'start_date'=>'2019-07-30 22:34:18',
            'end_date'=>'2019-08-30 22:34:18',
            'jobboard_id'=>'3'
        ]);
        DB::table('release_plans')->insert([
            'name'=>'Release3',
            'description'=>'This is Release1',
            'tag'=>'product3',
            'start_date'=>'2019-07-30 22:34:18',
            'end_date'=>'2019-08-30 22:34:18',
            'jobboard_id'=>'4'
        ]);
    }
}
