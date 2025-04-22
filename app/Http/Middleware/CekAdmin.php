<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CekAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, String $role)
    {
        $user = Auth::user();
        if($user->role == $role) {
            if($user->role === 'member usaha' && $user->status != 1){
                Alert::error('Butuh Validasi', 'User harus di Validasi oleh admin terlebih dahulu!');
                return redirect(route('front.home'));
            }
            return $next($request);
        }else{
            return redirect(route('front.home'));
        }
    }
}
