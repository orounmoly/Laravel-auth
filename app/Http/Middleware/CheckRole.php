<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next)
    {
        if($request->user() === null) {
            return response()->view("errors.503");
        }

        $actions = $request->route()->getAction();
        $roles = isset($actions["roles"]) ? $actions["roles"] : null;

        if($request->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
        }
        return response()->view("errors.503");
    }
}
