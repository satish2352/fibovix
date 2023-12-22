<?php
namespace App\Http\Middleware;
use Closure;
class Admin 
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next)
    {
        if(!$request->session()->exists('adminId'))
        {
            return redirect('admin');
        }
       
        return $next($request);
    }
}
