@extends('users.Doctors.master')
@section('content')

    <table>
        <thead>
            <tr>
                <th>MRN</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Status</th>
                <th>Actions</th>
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
            
                    <td>{{ $patient->status }}</td>
                    <td>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

