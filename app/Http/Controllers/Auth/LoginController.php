<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
 use Illuminate\Support\Facades\Hash;
 

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       // dd( $credentials);
    
        $user = User::where('email', $request->input('email'))->first();

        if ($user && $request->input('password') === $user->password) {
            // Authentication successful
            session(['user_id' => $user->id]);
           // dd(session('user_id'));
            $roles = $user->roles->name;
           // session(['key' => 'value']);
           // dd($roles);
            // Perform the redirection based on user's role
            if ($roles === 'Admin') {
                // Redirect to the admin dashboard
                return redirect()->route('A.dashboard');
            } elseif ($roles === 'Doctor') {
               // echo "you are  adoc";
                // Redirect to the doctor dashboard
                return redirect()->route('Doc.dash');
               // return redirect()->route('D.dashboard');
            } elseif ($roles === 'Nurse') {
                // Redirect to the nurse dashboard
                return redirect()->route('nurse.dashboard');
            } elseif ($roles === 'Receptionist') {
                // Redirect to the receptionist dashboard
                return redirect()->route('receptionist.dashboard');
            } elseif ($roles === 'Lab Technician') {
                // Redirect to the lab technician dashboard
                return redirect()->route('lab-technician.dashboard');
            } elseif ($roles === 'Pharmacist') {
                // Redirect to the pharmacist dashboard
                return redirect()->route('pharmacist.dashboard');
            } else {
                // Handle other roles or redirect to a default page
                return redirect('/default');
            }
        } else {
            // Invalid credentials
            return back()->with('error', 'Login credentials do not match.');
        }
    }
    
    
public function logout(){
    session()->flush();
    Auth::logout();
    return redirect('login');
}
           
        
}
           
  




   

