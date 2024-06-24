@extends('users.Doctors.master')

@section('content')
    <div class="container">
        <h1>View Appointment</h1>
        
        <div class="mb-3">
            <label for="patientName" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="patientName" value="{{ $appointment->patient_name }}" disabled>
        </div>
        <div class="mb-3">
            <label for="mrn" class="form-label">MRN</label>
            <input type="number" class="form-control" id="mrn" value="{{ $appointment->mrn }}" disabled>
        </div>
        <div class="mb-3">
            <label for="contactDetails" class="form-label">Contact Details</label>
            <input type="text" class="form-control" id="contactDetails" value="{{ $appointment->contact_details }}" disabled>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date1" value="{{ $appointment-> created_at}}" disabled>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Appointment Date</label>
            <input type="date" class="form-control" id="date" value="{{ $appointment->date }}" disabled>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="time" class="form-control" id="time" value="{{ $appointment->time }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Appointed To</label>
            <input type="text" class="form-control" id="appointedTo" value="{{ $appointment->appointed_to }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" class="form-control" id="status" value="{{ $appointment->status }}" disabled>
        </div>
        
        <a href="{{ route('appointments.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
