<?php

namespace App\Http\Middleware;

use Closure;

class checkFoo
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

        if(!$request->session()->exists('foo') && $request->route()->getName() === 'setfoo'){

            return $next($request);
        }


        if(!session()->has('foo')){
            session()->flash('foo-warning', 'You must set foo to continue.');
            return redirect()->route('setfoo');
        }



        return $next($request);
    }

}
