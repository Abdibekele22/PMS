<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Reception;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Nurse;

class DocController extends Controller
{

 
    /**
     * 
     * 
     * 
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function dashboard()
    {
        return view('users.Doctors.master');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function viewPatients()
{
    //$patients = Reception::all();
    $patients=Reception::where('status','pending')->get();

    return view('users.Doctors.partials.patientls', compact('patients'));
}

public function vital_sign()
{
    if (session()->has('user_id')) {
        // Session is set, the user is authenticated
        $userId = session('user_id');
        $user = User::find($userId);

        if ($user) {
            // User found
            $name = $user->first_name;
            $vitalSigns = Nurse::where('doctor', $name)->get();
            return view('users.Doctors.partials.view_vital', compact('vitalSigns'));
        } else {
            // User not found, handle the error
            return back()->with('error', 'User not found.');
        }
    }

    // Session is not set, the user is not authenticated
    return redirect('login');
}

  
   
}


