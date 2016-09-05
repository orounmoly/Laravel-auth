<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->command->info("Roles table seed successful.");

        $this->call(UsersTableSeeder::class);
        $this->command->info("User table seed successful");
    }
}
