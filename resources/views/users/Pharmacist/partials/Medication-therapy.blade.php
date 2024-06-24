@extends('users.pharmacist.master')
@section('title','Medication theraphy')
@section('content')
    <div class="container">
        <h1>Manage Medication Therapy</h1>

        <form action="#" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="patient_name">Patient Name:</label>
                <input type="text" name="patient_name" id="patient_name" class="form-control" value="{{ $medicationTherapy->patient_name }}" readonly>
            </div>

            <div class="form-group">
                <label for="medication_name">Medication Name:</label>
                <input type="text" name="medication_name" id="medication_name" class="form-control" value="{{ $medicationTherapy->medication_name }}" readonly>
            </div>

            <div class="form-group">
                <label for="dosage">Dosage:</label>
                <input type="text" name="dosage" id="dosage" class="form-control" value="{{ $medicationTherapy->dosage }}">
            </div>

            <div class="form-group">
                <label for="frequency">Frequency:</label>
                <input type="text" name="frequency" id="frequency" class="form-control" value="{{ $medicationTherapy->frequency }}">
            </div>

            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="text" name="duration" id="duration" class="form-control" value="{{ $medicationTherapy->duration }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Therapy</button>
        </form>
    </div>
@endsection
