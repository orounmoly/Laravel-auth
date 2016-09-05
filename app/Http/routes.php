<?php

/*,
        "middleware" => "roles",
        "roles" => ["admin"]*/


Route::group(["middleware" => "web", "middleware" => "auth"], function (){

    Route::get("/user/login", function (){
        return view("user.login");
    })->name("user.login");

    Route::get("/user/logout", function (){
       Auth::logout();
        return redirect()->route("user.login");
    })->name("logout");

    Route::post("/user/login", [
        "uses" => "AuthController@postSignIn",
        "as" => "user.login"
    ]);

    Route::get("/", function (){
        return view("index");
    })->name("main");

    Route::group(["middleware" => "roles"], function (){

        Route::get("/home", [
            "uses" => "AppController@getHome",
            "as" => "home",
            "roles" => ["superuser","admin"]
        ]);

        Route::get("/user/role",[
            "uses" => "AppController@getUserRole",
            "as" => "user.role",
            "roles" => ["admin","superuser"]
        ]);

        Route::post("/role/assign",[
            "uses" => "AppController@AssignRole",
            "as" => "role.assign",
            "roles" => "superuser"
        ]);
    });
});


