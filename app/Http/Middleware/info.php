<?php

namespace App\Http\Middleware;

use App\Models\Banner;
use Closure;
use Illuminate\Http\Request;

class info
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
        if (empty(session()->get("banner")))
        {
            $list = (new Banner())->getList();
            foreach($list as $data)
            {
                session()->put("banner".$data->url,$data->photo);
            }

            session()->put("banner","Y");
        }

        return $next($request);
    }
}
