@extends('users.Receptionist.master')
@section('content')
    <h1>ADD New Patient</h1>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <label for="MRN">MRN:</label>
        <input type="number" name="MRN" required>

        <label for="Full_Name">Full Name:</label>
        <input type="text" name="Full_Name" required>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label for="Age">Age:</label>
        <input type="number" name="Age" required>

        <label for="Phone_Number">Phone Number:</label>
        <input type="number" name="Phone_Number" required>

        <label for="Address">Address:</label>
        <textarea name="Address"></textarea>

        <label for="Emergency_CN">Emergency Contact Name:</label>
        <input type="text" name="Emergency_CN" required>

        <label for="Relationship">Relationship:</label>
        <input type="text" name="Relationship" required>

        <label for="E_Phone_Number">Emergency Phone Number:</label>
        <input type="number" name="E_Phone_Number" required>

        <button type="submit">Create</button>
    </form>
    @endsection