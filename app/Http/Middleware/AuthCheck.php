<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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
        if(session()->has('uname') )
        {
            if(session('uname')=='admin')
            {
                if($request->path()!='adhm' && $request->path()!='reg' && $request->path()!='viewstaff' && $request->path()!='project' && $request->path()!='addproject' && $request->path()!='viewproject' && $request->path()!='addgroupmembers')
                {
                    return back();
                }
            }
            else
            {
                if($request->path()!='sthm' && $request->path()!='staffviewproject' && $request->path()!='staffviewmodule' && $request->path()!='staffviewtask')
                {
                    return back();
                }
            }
        }
        else
        {
            if($request->path()!='/' && $request->path()!='log')
            {
                return redirect('/log')->with ('fail','You must be logged in');
            }
        }

        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }
}
