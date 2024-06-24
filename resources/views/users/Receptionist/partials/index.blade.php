@extends('users.Receptionist.master')
@section('content')
    <h1>All Patients</h1>

    <a href="{{ route('patients.create') }}">ADD New Patient</a>

    <form action="{{ route('patients.search') }}" method="POST">
        @csrf
        <input type="text" name="query" placeholder="Search">
        <button type="submit">Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>MRN</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Emergency Contact Name</th>
                <th>Relationship</th>
                <th>Emergency Phone Number</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->MRN }}</td>
                    <td>{{ $patient->Full_Name }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->Age }}</td>
                    <td>{{ $patient->Phone_Number }}</td>
                    <td>{{ $patient->Address }}</td>
                    <td>{{ $patient->Emergency_CN }}</td>
                    <td>{{ $patient->Relationship }}</td>
                    <td>{{ $patient->E_Phone_Number }}</td>
                    <td>{{ $patient->status }}</td>
                    <td>
                        <a href="{{ route('patients.edit', $patient->id) }}">UPDATE</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection