<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Session is set
        if (Session::get("locale") != null) {
            $locale = Session::get("locale");
            if(auth()->check()) {
                if($request->user()->locale != ''){
                    $locale = $request->user()->locale;
                }
            }
            App::setLocale($locale);
        } else {
            // Session is not set
            Session::put("locale", config('app.locale'));
            App::setLocale(Session::get("locale"));
        }
        return $next($request);
    }
}
