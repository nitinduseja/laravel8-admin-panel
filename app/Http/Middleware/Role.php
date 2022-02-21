<?php

namespace App\Http\Middleware;

use App\Http\Resources\ErrorResource;
use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!auth()->user()) return redirect('/');
        $authRole = auth()->user()->role->value;
        if (in_array($authRole, explode("|", $role))) {
            return $next($request);
        }
        return redirect('/home');
    }
}
