<?php

use Illuminate\Database\Seeder;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_details')->insert([
            'job_title'=>'Project Manager',
            'location'=>'Hong Kong',
            'team_id'=>'2',
        ]);
    }
}
