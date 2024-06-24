@extends('users.labtechnician.master')
@section('title','lab')
@section('content')
    <div class="container">
        <h1>Lab</h1>
       <form action="#" method="POST"> 
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="patient_name">Patient Name:</label>
                <input type="text" name="patient_name" id="patient_name" class="form-control" value="#" readonly>
            </div>

            <div class="form-group">
                <label for="medication_name">Medication Name:</label>
                <input type="text" name="medication_name" id="medication_name" class="form-control" value="#" readonly>
            </div>

            <div class="form-group">
                <label for="dosage">Dosage:</label>
                <input type="text" name="dosage" id="dosage" class="form-control" value="#" readonly>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" name="quantity" id="quantity" class="form-control" value="#">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
              
            </div>
            <select name="status" id="status" class="form-control">
                  

            <button type="submit" class="btn btn-primary">Update Order</button>
        </form>
    </div> 
     @endsection