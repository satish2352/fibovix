<?php
namespace App\Http\Middleware;
use Closure;
class Pilot 
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next)
    {
        if(!$request->session()->exists('pilotId'))
        {
            return redirect('pilot');
        }
        // if(!session()->exists('schooladmLoginId'))
        // {
        //     return redirect('schooladm');
        // }
        return $next($request);
    }
}