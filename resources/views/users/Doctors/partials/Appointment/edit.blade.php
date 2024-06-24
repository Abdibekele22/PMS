@extends('users.Doctors.master')

@section('content')
    <div class="container">
        <h1>Edit Appointment</h1>
        
        <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="patientName" class="form-label">Patient Name</label>
                <input type="text" class="form-control" id="patientName" name="patient_name" value="{{ $appointment->patient_name }}" placeholder="Enter patient name">
            </div>
            <div class="mb-3">
                <label for="mrn" class="form-label">MRN</label>
                <input type="number" class="form-control" id="mrn" name="mrn" value="{{ $appointment->mrn }}" placeholder="Patient MRN">
            </div>
            <div class="mb-3">
                <label for="contactDetails" class="form-label">Contact Details</label>
                <input type="text" class="form-control" id="contactDetails" name="contact_details" value="{{ $appointment->contact_details }}" placeholder="Enter contact details">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $appointment->date }}">
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time" value="{{ $appointment->time }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Appointed To</label>
                <select class="form-select" id="appointedTo" name="appointed_to">
                    <option value="Internal Medicine OPD" {{ $appointment->appointed_to == 'Internal Medicine OPD' ? 'selected' : '' }}>Internal Medicine OPD</option>
                    <option value="Surgical" {{ $appointment->appointed_to == 'Surgical' ? 'selected' : '' }}>Surgical</option>
                    <option value="Pediatrics" {{ $appointment->appointed_to == 'Pediatrics' ? 'selected' : '' }}>Pediatrics</option>
                    <option value="Gynecology" {{ $appointment->appointed_to == 'Gynecology' ? 'selected' : '' }}>Gynecology</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="Active" {{ $appointment->status == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Pending" {{ $appointment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Cancelled" {{ $appointment->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Appointment</button>
        </form>
    </div>
@endsection
