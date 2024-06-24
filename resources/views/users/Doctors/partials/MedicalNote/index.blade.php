@extends('users.Doctors.master')

@section('content')
    <div class="container">
        <h1>Medical Notes</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Age</th>
                    <th>Diagnosis</th>
                    <th>Remark</th>
                    <th>Patient Condition</th>
                    <th>Investigations</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medicalNotes as $medicalNote)
                    <tr>
                        <td>{{ $medicalNote->patient_name }}</td>
                        <td>{{ $medicalNote->age }}</td>
                        <td>{{ $medicalNote->diagnosis }}</td>
                        <td>{{ $medicalNote->remark }}</td>
                        <td>{{ $medicalNote->patient_condition }}</td>
                        <td>{{ $medicalNote->investigations }}</td>
                        <td>
                            <!-- <a href="{{ route('mednote.show', $medicalNote->id) }}" class="btn btn-primary">View</a> -->
                            <a href="{{ route('mednote.edit', $medicalNote->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('mednote.destroy', $medicalNote->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this medical note?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('mednote.create') }}" class="btn btn-primary">Add New Medical Note</a>
    </div>
@endsection
