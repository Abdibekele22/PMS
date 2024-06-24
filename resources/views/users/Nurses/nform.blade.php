@extends('users.Nurses.master')
@section('content')
<form action="{{ route('nurse.store') }}" method="POST">
    @csrf

    <label for="MRN">MRN:</label>
    <input type="number" name="MRN" required>

    <label for="vital">Vital:</label>
    <input type="text" name="vital">

    <label for="Dept">Department:</label>
    <input type="text" name="Dept">
    <label for="vital">DOctor</label>
    <input type="text" name="doctor">

    <label for="condition">Condition:</label>
    <select name="condition">
        <option value="normal">Normal</option>
        <option value="emergency">Emergency</option>
    </select>

    <button type="submit">Allocate</button>
</form>
@endsection