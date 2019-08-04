<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(SprintTypesTableSeeder::class);
        $this->call(TaskTypesTableSeeder::class);
        $this->call(TaskOrderTypesTableSeeder::class);
        $this->call(TaskTagsTableSeeder::class);
        $this->call(TaskStatesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);

        // the following seed need to run as command

        //php artisan db:seed --class=UserDetailsTableSeeder
        //$this->call(UserDetailsTableSeeder::class);
        
        //php artisan db:seed --class=JobboardsTableSeeder
        //$this->call(JobboardsTableSeeder::class);
        
        //php artisan db:seed --class=UserPermissionsTableSeeder
        //$this->call(UserPermissionsTableSeeder::class);
        
        //php artisan db:seed --class=TeamUsersTableSeeder
        //$this->call(TeamUsersTableSeeder::class);

        //php artisan db:seed --class=TeamJobboardsTableSeeder
        //$this->call(TeamJobboardsTableSeeder::class);

        //php artisan db:seed --class=SprintsTableSeeder
        //$this->call(SprintTypesTableSeeder::class);

        //php artisan db:seed --class=TasksTableSeeder
        //$this->call(TasksTableSeeder::class);

        //php artisan db:seed --class=ReleasePlansTableSeeder
        //$this->call(ReleasePlansTableSeeder::class);

        //php artisan db:seed --class=ReleasePlanTasksTableSeeder
        //$this->call(ReleasePlanTasksTableSeeder::class);
    }
}
