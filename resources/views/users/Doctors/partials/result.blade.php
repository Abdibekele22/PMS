@extends('users.Doctors.master')

@section('content')
    <h1>All Lab Orders</h1>

    <table>
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Patient ID</th>
                <th>Requested Test</th>
                <th>Test Description</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($labOrders as $labOrder)
                <tr>
                    <td>{{ $labOrder->patient_name }}</td>
                    <td>{{ $labOrder->patient_id }}</td>
                    <td>
                    @if (is_array($labOrder->requested_test))
                            @foreach ($labOrder->requested_test as $test)
                                {{ $test }}<br>
                            @endforeach
                        @else
                            {{ $labOrder->requested_test }}
                        @endif
                    </td>
                    <td>{{ $labOrder->test_description }}</td>
                    <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
