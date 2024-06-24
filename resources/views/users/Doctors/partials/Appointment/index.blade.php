@extends('users.Doctors.master')

@section('content')
    <div class="container">
        <h1>Appointments</h1>

        <div class="mb-3">
            <form action="{{ route('appointments.search') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Search by patient name or MRN">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>MRN</th>
                    <th>Contact Details</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Appointed To</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->patient_name }}</td>
                        <td>{{ $appointment->mrn }}</td>
                        <td>{{ $appointment->contact_details }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->time }}</td>
                        <td>{{ $appointment->appointed_to }}</td>
                        <td>{{ $appointment->status }}</td>
                        <td>
                            <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
