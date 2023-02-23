<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $path = explode('/',$request->path());
        if (isset($path[0]) && $path[0] == 'affiliate-admin' && Auth::guard('admin')->id() == '') {
            return route('admin.home');
        } elseif (!$request->expectsJson()) {
            return url('/');
        }
    }
}
