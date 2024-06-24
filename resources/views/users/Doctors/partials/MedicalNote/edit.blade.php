@extends('users.Doctors.master')

@section('content')
    <div class="container">
        <h1>Edit Medical Note</h1>
        <form action="{{ route('mednote.update', $medicalNote->id) }}"  class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-4">
                <label for="patient_name">Patient Name:</label>
                <input type="text" name="patient_name" id="patient_name" class="form-control" value="{{ $medicalNote->patient_name }}" required>
            </div>
            <div class="col-md-4">
                <label for="Age">Age:</label>
                <input type="number" name="Age" id="Age" class="form-control" value="{{ $medicalNote->age }}" required>
            </div>

            <div class="col-md-8">
                <label for="diagnosis">Diagnosis:</label>
                <textarea name="diagnosis" id="diagnosis" class="form-control" rows="7" required>{{ $medicalNote->diagnosis }}</textarea>
            </div>

            <div class="col-md-8">
                <label for="remark">Remark:</label>
                <textarea name="remark" id="remark" class="form-control" rows="5" required>{{ $medicalNote->remark }}</textarea>
            </div>

            <div class="col-md-8">
                <label for="patient_condition">Patient Condition:</label>
                <textarea name="patient_condition" id="patient_condition" class="form-control" rows="6" required>{{ $medicalNote->patient_condition }}</textarea>
            </div>

            <div class="col-md-8">
                <label for="investigations">Investigations:</label>
                <textarea name="investigations" id="investigations" class="form-control" rows="8" required>{{ $medicalNote->investigations }}</textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
