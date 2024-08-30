<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Manager
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
            //empty
            //!isset:!(非) isset(有設定) !isset(沒設定)
            //通常empty = !isset,只有值是0時例外
            //如果值為0 empty(0),會回傳true, !isset(0) 會回傳false
            if (empty(session()->get("manager")))
            {
                return redirect("/admin");
                exit;
            }
            return $next($request);
    }
}

