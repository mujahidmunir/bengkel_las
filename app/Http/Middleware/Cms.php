<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cms
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!empty($request->user())) {
            if ($request->user()->hasRole('cms')) {
                return $next($request);
            } else {
                abort(403);
            }
        } else {
            return redirect('cms/login');
        }
    }
}
