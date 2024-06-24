<?php

namespace App\Http\Controllers;

use App\Models\MedicalNote;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $medicalNotes = MedicalNote::all();
        return view('users.Doctors.partials.MedicalNote.index', compact('medicalNotes'));
    }

    public function create()
    {
        return view('users.Doctors.partials.MedicalNote.Medical-notes');
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required',
            'Age' => 'required|integer',
            'diagnosis' => 'required',
            'remark' => 'required',
            'patient_condition' => 'required',
            'investigations' => 'required',
        ]);

        MedicalNote::create($request->all());

        return redirect()->route('mednote.index')->with('success', 'Medical note created successfully.');
    }

    public function show($id)
    {
        $medicalNote = MedicalNote::findOrFail($id);
        return view('users.Doctors.partials.MedicalNote.show', compact('medicalNote'));
    }

    public function edit($id)
    {
        $medicalNote = MedicalNote::findOrFail($id);
        return view('users.Doctors.partials.MedicalNote.edit', compact('medicalNote'));
    }

    public function update(Request  $request,$id)
    {
        $request->validate([
            'patient_name' => 'required',
            'Age' => 'required|integer',
            'diagnosis' => 'required',
            'remark' => 'required',
            'patient_condition' => 'required',
            'investigations' => 'required',
        ]);

        $medicalNote = MedicalNote::findOrFail($id);
        $medicalNote->update($request->all());

        return redirect()->route('mednote.index')->with('success', 'Medical note updated successfully.');
    }

    public function destroy($id)
    {
        $medicalNote = MedicalNote::findOrFail($id);
        $medicalNote->delete();

        return redirect()->route('mednote.index')->with('success', 'Medical note deleted successfully.');
    }
}
