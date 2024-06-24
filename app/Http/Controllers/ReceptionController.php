<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reception;
use App\Models\User;
use App\Models\Doctor;
class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(){
        return view('users.Receptionist.master');
    }
    public function index()
    {
        $patients = Reception::all();
        return view('users.Receptionist.partials.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users.Receptionist.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $patient = Reception::create([
            'MRN' =>  $request->MRN,
            'Full_Name' => $request->Full_Name,
            'gender' => $request->gender,
            'Age' => $request->Age,
            'Phone_Number' => $request->Phone_Number,
            'Address' =>$request->Address,
            'Emergency_CN' => $request->Emergency_CN,
            'Relationship' => $request->Relationship,
            'E_Phone_Number' => $request->E_Phone_Number,
            'status'=>$request->status,
        ]);

      //  Reception::create($validatedData);

        return redirect()->route('patients.index')->with('success', 'Patient record created successfully.');
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
    public function edit($id)
    {
        $patient = Reception::findOrFail($id);
        return view('users.Receptionist.partials.edit', compact('patient'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'MRN' => 'required|numeric',
            'Full_Name' => 'required',
            'gender' => 'required|in:male,female',
            'Age' => 'required|numeric',
            'Phone_Number' => 'required|numeric',
            'Address' => 'nullable',
            'Emergency_CN' => 'required',
            'Relationship' => 'required',
            'E_Phone_Number' => 'required|numeric',
        ]);

        $patient = Reception::findOrFail($id);
        $patient->update($validatedData);

        return redirect()->route('patients.index')->with('success', 'Patient record updated successfully.');
    }
    public function search(Request $request)
    {
        $searchQuery = $request->input('query');
        
        $patients = Reception::where('Full_Name', 'LIKE', "%$searchQuery%")
                            ->orWhere('MRN', 'LIKE', "%$searchQuery%")
                            ->orWhere('Emergency_CN', 'LIKE', "%$searchQuery%")
                            ->orWhere('Relationship', 'LIKE', "%$searchQuery%")
                            ->get();
        
        return view('users.Receptionist.partials.index', compact('patients'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
