<!-- show.blade.php -->

@extends('users.Doctors.master')
@section('title', 'Prescription Details')
@section('content')
    <div class="container">
        <h1>Prescription Details</h1>

        <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Dosage Instructions</th>
                        <th>Additional Notes</th>
                        <th>Medicine</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prescriptions as $prescription)
                        <tr>
                            <td>{{ $prescription->patient_name }}</td>
                            <td>{{ $prescription->dosage_instructions }}</td>
                            <td>{{ $prescription->additional_notes }}</td>
                            <td>
                                <ul>
                                    @foreach ($prescription->medicines as $medicine)
                                        <li>{{ $medicine->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    </div>
@endsection
