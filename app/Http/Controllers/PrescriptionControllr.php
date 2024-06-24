<?php

namespace App\Http\Controllers;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionControllr extends Controller
{
    //
 
    public function index()
    {
        $prescriptions = Prescription::all(); // Fetch all prescriptions from the database
       // dd( $prescriptions);
        
        return view('users.Doctors.partials.Prescription-detail', compact('prescriptions'));
    }
    /**
     * Show the form for creating a new prescription.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.Doctors.partials.prescription');
    }

    /**
     * Store a newly created prescription in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'patient_name' => 'required|string',
            'medicine' => 'nullable|array',
            'dosage_instructions' => 'nullable|string',
            'additional_notes' => 'nullable|string',
        ]);

        $prescription = Prescription::create($validatedData);

        return redirect()->route('prescriptions.index', $prescription->id)
            ->with('success', 'Prescription created successfully.');
    }

    /**
     * Display the specified prescription.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $prescription = Prescription::all();
      //  dd($prescription); // Debugging code
    
        return view('users.Doctors.partials.Prescription-detail', compact('prescription'));
    }
    

    /**
     * Show the form for editing the specified prescription.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        return view('prescriptions.edit', compact('prescription'));
    }

    /**
     * Update the specified prescription in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        $validatedData = $request->validate([
            'patient_name' => 'required|string',
            'medicine' => 'nullable|array',
            'dosage_instructions' => 'nullable|string',
            'additional_notes' => 'nullable|string',
        ]);

        $prescription->update($validatedData);

        return redirect()->route('prescriptions.show', $prescription->id)
            ->with('success', 'Prescription updated successfully.');
    }
}
