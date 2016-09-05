<?php

use Illuminate\Database\Seeder;
use App\Role;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TRUNCATE
        DB::table('roles')->truncate();

        $role = new Role();
        $role->name = "superuser";
        $role->description = "Super administrator. can allow full permission";
        $role->save();

        $role = new Role();
        $role->name = "admin";
        $role->description = "system administrator. can create user only.";
        $role->save();

        $role = new Role();
        $role->name = "user";
        $role->description = "Normal user.";
        $role->save();

    }
}
