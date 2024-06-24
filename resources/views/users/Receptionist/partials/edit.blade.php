@extends('users.Receptionist.master')
@section('content')


    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="MRN">MRN:</label>
        <input type="number" name="MRN" value="{{ $patient->MRN }}" required>

        <label for="Full_Name">Full Name:</label>
        <input type="text" name="Full_Name" value="{{ $patient->Full_Name }}" required>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male" {{ $patient->gender === 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $patient->gender === 'female' ? 'selected' : '' }}>Female</option>
        </select>

        <label for="Age">Age:</label>
        <input type="number" name="Age" value="{{ $patient->Age }}" required>

        <label for="Phone_Number">Phone Number:</label>
        <input type="number" name="Phone_Number" value="{{ $patient->Phone_Number }}" required>

        <label for="Address">Address:</label>
        <textarea name="Address">{{ $patient->Address }}</textarea>

        <label for="Emergency_CN">Emergency Contact Name:</label>
        <input type="text" name="Emergency_CN" value="{{ $patient->Emergency_CN }}" required>

        <label for="Relationship">Relationship:</label>
        <input type="text" name="Relationship" value="{{ $patient->Relationship }}" required>

        <label for="E_Phone_Number">Emergency Phone Number:</label>
        <input type="number" name="E_Phone_Number" value="{{ $patient->E_Phone_Number }}" required>
        
        <label for="status">Status:</label>
        <select name="status" required>
            <option value="active" {{ $patient->stutus === 'active' ? 'selected' : '' }}>Active</option>
            <option value="pending" {{ $patient->stutus === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="3rdoption" {{ $patient->stutus === '3rdoption' ? 'selected' : '' }}>3rdoption</option>
        </select>

        <button type="submit">Update</button>
    </form>
    @endsection

