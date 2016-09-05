<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role')->truncate();
        DB::table('users')->truncate();

        $user = new User();
        $user->first_name = "Ounmoly";
        $user->last_name = "Or";
        $user->email = "or.ounmoly@gmail.com";
        $user->password = bcrypt('moly123');
        $user->save();
        $role = Role::where('name','admin')->first();
        $user->roles()->attach($role);

        $user = new User();
        $user->first_name = "Chanthorn";
        $user->last_name = "Mao";
        $user->email = "chanthorn.mao@gmail.com";
        $user->password = bcrypt('chanthorn123');
        $user->save();
        $role = Role::where('name','user')->first();
        $user->roles()->attach($role);

        $user = new User();
        $user->first_name = "Sambo";
        $user->last_name = "Chhay";
        $user->email = "sambo.chhay@gmail.com";
        $user->password = bcrypt('sambo123');
        $user->save();
        $role = Role::where('name','superuser')->first();
        $user->roles()->attach($role);
    }
}
