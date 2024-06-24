@extends('users.Doctors.master')

@section('content')
    <div class="container">
        <h1>Medical Note</h1>
        <div>
            <strong>Patient Name:</strong> {{ $medicalNote->patient_name }} <br>
            <strong>Age:</strong> {{ $medicalNote->age }} <br>
            <strong>Diagnosis:</strong> {{ $medicalNote->diagnosis }} <br>
            <strong>Remark:</strong> {{ $medicalNote->remark }} <br>
            <strong>Patient Condition:</strong> {{ $medicalNote->patient_condition }} <br>
            <strong>Investigations:</strong> {{ $medicalNote->investigations }} <br>
        </div>
        <a href="{{ route('mednote.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
