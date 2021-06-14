<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class IsRs
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
        $user = User::find(session()->get('user')->id);
        if($user->role->id == 2)
        {
            $isRs=0;
            foreach($user->enseignant->sections as $section){
                if($section->pivot->isRs == 1){
                    $isRs = 1;
                }
            }
            if($isRs == 1){
                return $next($request);
            }
        }

        return redirect()->route('profil');
    }
}
