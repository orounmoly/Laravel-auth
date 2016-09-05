<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class AuthController extends Controller
{
    public function getSignIn()
    {
        return view("user.login");
    }

    public function postSignIn(Request $request)
    {
        if(Auth::attempt(["email" => $request["email"], "password" => $request["password"]])){
            return redirect()->route("main");
        }
        return redirect()->back();
    }
}
