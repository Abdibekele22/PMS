<?php

namespace App\Http\Controllers;

use App\Models\LabOrder;
use Illuminate\Http\Request;

class LabRequestController extends Controller
{
    public function index()
    {
        return view('users.Doctors.partials.Order');
        // $labOrders = LabOrder::all();
        // return view('lab.index', compact('labOrders'));
    }

    public function create()
    {
        return view('users.Doctors.Order');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'patient_name' => 'required',
            'patient_id' => 'required',
            'requested_test' => 'required',
            'test_description' => 'required',
        
            'physician_name' => 'required',
        ]);

        LabOrder::create($validatedData);

        return redirect()->route('lab.index')->with('success', 'Lab order created successfully.');
    }

    public function show($id)
    {
        $labOrder = LabOrder::findOrFail($id);
        return view('lab.show', compact('labOrder'));
    }

    public function edit($id)
    {
        $labOrder = LabOrder::findOrFail($id);
        return view('lab.edit', compact('labOrder'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'patient_name' => 'required',
            'patient_id' => 'required',
            'requested_test' => 'required',
            'test_description' => 'required',
        
            'physician_name' => 'required',
        ]);

        $labOrder = LabOrder::findOrFail($id);
        $labOrder->update($validatedData);

        return redirect()->route('lab.index')->with('success', 'Lab order updated successfully.');
    }

    public function destroy($id)
    {
        $labOrder = LabOrder::findOrFail($id);
        $labOrder->delete();

        return redirect()->route('lab.index')->with('success', 'Lab order deleted successfully.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $labOrders = LabOrder::where('patient_name', 'LIKE', '%' . $search . '%')
            ->orWhere('patient_id', 'LIKE', '%' . $search . '%')
            ->orWhere('physician_name', 'LIKE', '%' . $search . '%')
            ->get();

        return view('lab.index', compact('labOrders'));
    }
}
