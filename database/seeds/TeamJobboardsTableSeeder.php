<?php

use Illuminate\Database\Seeder;

class TeamJobboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TeamJobboard::class, 3)->create();
    }
}
