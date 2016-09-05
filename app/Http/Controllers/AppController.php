<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;


class AppController extends Controller
{

    public function getHome()
    {
        return view("home.index");
    }

    public function getUserRole()
    {
        $users = User::all();
        $roles = Role::all();
        return view("user.user_role", ["users" => $users,"roles" => $roles]);
    }

    public function AssignRole(Request $request)
    {
        //dd($request->headers);
        //dd($request->header("host") ."\n". $request->header("user-agent"));

        $user = User::where("id", $request["id"])->first();
        $user->roles()->detach();
        $roles = Role::all();
        foreach ($roles as $role){
            if($request["ch-".$role->name]){
                $user->roles()->attach(Role::where("name", $role->name)->first());
            }
        }
        return redirect()->back();
    }
}
