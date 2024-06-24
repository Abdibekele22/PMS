@extends('users.Nurses.master')

@section('content')
    <h1>Vital Signs</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>MRN</th>
                <th>Vital</th>
                <th>Dept</th>
                <th>Condition</th>
                <th>Action</th>
                <th>Created At</th>
                <th>Updated At</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($vitalSigns as $vitalSign)
                <tr>
                    <td>{{ $vitalSign->id }}</td>
                    <td>{{ $vitalSign->MRN }}</td>
                    <td>{{ $vitalSign->vital }}</td>
                    <td>{{ $vitalSign->Dept }}</td>
                    <td>{{ $vitalSign->condition }}</td>
                    <td>{{ $vitalSign->created_at }}</td>
                    <td>{{ $vitalSign->updated_at }}</td>
                    <a href="#">MANAGE</a>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
