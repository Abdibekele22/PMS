@extends('users.Doctors.master')
@section('content')
@section('title','Lab Order')
    <h1>Order Lab Test</h1>
    
    <div class="mx-auto p-2" style="width: 700px;">
        <form class="form-wrapper" action="{{ route('lab.store') }}" method="POST">
            @csrf

            <!-- Patient Information -->
            <div class="form-group">
                <label for="patient_name"><h4>Patient Name</h4></label>
                <input type="text" class="form-control" id="patient_name" name="patient_name" required>
            </div>
            
            <div class="form-group">
                <label for="patient_id"><h4>Patient ID</h4></label>
                <input type="text" class="form-control" id="patient_id" name="patient_id" required>
            </div>

            <!-- Lab Test Information -->
            <div class="form-group">
                <label for="requested_test"><h4>Requested Test</h4></label>
                <select class="form-control" id="requested_test" name="requested_test" required>
                    <option value="">Select Test Category</option>
                    <option value="hematology">Hematology</option>
                    <option value="serology">Serology</option>
                    <option value="urine">Urine Analysis</option>
                    <option value="parasitology">Parasitology</option>
                    <option value="chemistry">Clinical Chemistry</option>
                </select>
            </div>

            <div class="form-group">
                <label for="test_description"><h5>Test Description</h5></label>
                <textarea class="form-control" id="test_description" name="test_description" required></textarea>
            </div>

            <!-- Date and Time -->
            <div class="form-group">
                <label for="test_date"><h5>Test Date</h5></label>
                <input type="date" class="form-control" id="test_date" name="test_date" required>
            </div>

            <div class="form-group">
                <label for="test_time"><h5>Test Time</h5></label>
                <input type="time" class="form-control" id="test_time" name="test_time" required>
            </div>

            <!-- Physician Information -->
            <div class="form-group">
                <label for="physician_name"><h5>Physician Name</h5></label>
                <input type="text" class="form-control" id="physician_name" name="physician_name" required>
            </div>

            <!-- Additional Notes -->
            <div class="form-group">
                <label for="additional_notes"><h5>Additional Notes</h5></label>
                <textarea class="form-control" id="additional_notes" name="additional_notes"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection
