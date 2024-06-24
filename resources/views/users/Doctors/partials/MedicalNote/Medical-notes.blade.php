 
@extends('users.Doctors.master')
@section('content')
@section('title', 'Medical notes')
    <div class="container">
        <h1>Medical Note</h1>
        <form action="{{ route('mednote.store') }}" method="POST" class="row g-3">
        @csrf
         <div class="col-md-4">
                <label for="patient_name">Patient Name:</label>
                <input type="text" name="patient_name" id="patient_name" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="Age">Age:</label>
                <input type="number" name="Age" id="Age" class="form-control">
            </div>

            <div class="col-md-8">
                <label for="diagnosis">Diagnosis:</label>
                <textarea name="diagnosis" id="diagnosis" class="form-control" rows="7"></textarea>
            </div>

            <div class="col-md-8">
                <label for="remark">Remark:</label>
                <textarea name="remark" id="remark" class="form-control" rows="5"></textarea>
            </div>

            <div class="col-md-8">
                <label for="patient_condition">Patient Condition:</label>
                <textarea name="patient_condition" id="patient_condition" class="form-control" rows="6"></textarea>
            </div>
            <div class="col-md-8">
                <label for="investigations">Investigations:</label>
                <textarea name="investigations" id="investigation" class="form-control" rows="8"></textarea>
            </div>  
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
           
      
    </div>



@endsection





