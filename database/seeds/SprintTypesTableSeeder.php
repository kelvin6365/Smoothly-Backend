<?php

use Illuminate\Database\Seeder;

class SprintTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sprint_types')->delete();
        DB::table('sprint_types')->insert([
            'name'=>'NORMAL',
        ]);
        DB::table('sprint_types')->insert([
            'name'=>'BACKLOG',
        ]);
    }
}
