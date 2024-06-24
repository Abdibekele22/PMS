<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('auth.login');
        }

        if (!Auth::user()->hasRole($role)) {
            abort(403, 'Unauthorized action.');
        }

        switch ($role) {
            case 'Admin':
                return view('users.Admin.layout.master');
                break;
            case 'Doctor':
                return view('doctor.dashboard');
                break;
            case 'Nurse':
                return view('nurse.dashboard');
            default:
                return redirect()->route('dashboard')->with('error', 'Unauthorized action.');
        }
    }
}
