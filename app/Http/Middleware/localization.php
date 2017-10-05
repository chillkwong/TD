<?php

namespace App\http\Middleware;

use Closure, Session;

class localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $languages = ['en','hk','cn'];

    public function handle($request, Closure $next)
    {
        $local = ($request->hasHeader('X-localization')) ? $request->header('X-localization') : 'en';
     // set laravel localization
        // Session::put('defaultLocale',$locale);
        app()->setLocale($local);

        // dd($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    // continue request
    return $next($request);
    }
}
