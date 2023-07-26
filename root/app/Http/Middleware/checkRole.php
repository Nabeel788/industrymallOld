<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
          if ($request->user() == null) {
            return response("Insufficient Permissions. Go Back!", 401);
          }
          $actions = $request->route()->getAction();
          $roles = isset($actions['roles']) ? $actions['roles'] : null;
      
          if ($request->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
          }
          return response("Insufficient Permissions. Go Back!", 401);
    }
}
