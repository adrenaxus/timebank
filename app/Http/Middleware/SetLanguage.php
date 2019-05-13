<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Auth;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		
		
		//
		// THIS MIDDLEWARE CAN BE REMOVED as language is now set in  novaServiceProviders boot function
		//
		
		App::setLocale(Auth::user()->language);
        return $next($request);
    }
}
