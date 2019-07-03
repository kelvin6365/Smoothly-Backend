<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name'=>'Team A',
            'in_charge'=>'1',
            'Field'=>'Sex',
        ]);
    }
}
