<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')){
            $locale = session()->get('locale');
        }else {
            $locale = config('app.fallback_locale');
            session()->put('locale',$locale);
        }

        App::setLocale($locale);
        return $next($request);
    }
}
