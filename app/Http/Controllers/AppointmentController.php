<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('users.Doctors.partials.Appointment.index', compact('appointments'));
    }

    public function create()
    {
        return view('users.Doctors.partials.Appointment.Appointment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required',
            'mrn' => 'required',
            'contact_details' => 'required',
            'date' => 'required',
            'time' => 'required',
            'appointed_to' => 'required',
            'status' => 'required',
        ]);

        Appointment::create($request->all());

        return redirect()->route('appointments.index')->with('success', 'Appointment created successfully.');
    }

    public function show($id)
    {
        $appointment = Appointment::find($id);
        return view('users.Doctors.partials.Appointment.show', compact('appointment'));
    }

    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('users.Doctors.partials.Appointment.edit', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_name' => 'required',
            'mrn' => 'required',
            'contact_details' => 'required',
            'date' => 'required',
            'time' => 'required',
            'appointed_to' => 'required',
            'status' => 'required',
        ]);

        $appointment = Appointment::find($id);
        $appointment->update($request->all());

        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully.');
    }
    public function search(Request $request)
{
    $search = $request->input('search');
    $appointments = Appointment::where('patient_name', 'like', '%' . $search . '%')
        ->orWhere('mrn', 'like', '%' . $search . '%')
        ->get();

    return view('appointments.index', compact('appointments'));
}


    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
