<?php
namespace App\Http\Middleware;
use Illuminate\Http\Request;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkRole
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check())
        {
            return redirect()->route('auth.login');
        }

        $user = Auth::user();

        if($user == 'admin')
        {
            
        }

        return $next($request);
    }
}
?>