<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reception;
use App\Models\Doctor;
use App\Models\Nurse;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(){
        return view('users.Nurses.master');
    }
    public function index()
    {
       //return view('users.Admin.layout.master');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.Nurses.nform');
    }
    public function allocate(){
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
//         $users = User::all();

// dd($doctor);

    {
        $validatedData = $request->validate([
            'MRN' => 'required|integer',
            'vital' => 'nullable|string',
            'Dept' => 'nullable|string',
            'doctor'=>'nullable|string',
            'condition' => 'nullable|in:normal,emergency',
            
        ]);

        $_vital_sign = Nurse::create($validatedData);

        // Perform any additional actions or redirect as needed

        return redirect()->back()->with('success', 'Vital sign record created successfully.');
    }
     


    }

    /**
     * Display the specified resource.
     */
    public function show(User $doctor)
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
        $patients=Reception::where('status','active')->get();
    
        return view('users.Nurses.patientls', compact('patients'));
    }
}
