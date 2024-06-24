 
@extends('users.Doctors.master')
@section('content')
@section('title', 'Patient card')
    <div class="container">
        <h1>Patient Card</h1>
            <form class = "row g-3">
            <div class="col-md-4">
                <label for="MRN">MRN</label>
                <input type="number" name="MRN" id="MRN" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="patient_name">Patient Name:</label>
                <input type="text" name="patient_name" id="patient_name" class="form-control">
            </div>
            <div class="col-md-4">
    <label for="inputGender" class="form-label">Gender</label>
    <select id="inputGender" class="form-select">
      <option selected>male</option>
      <option>female</option>
      
    </select>
  </div>
            <div class="col-md-4">
                <label for="Age">Age:</label>
                <input type="number" name="Age" id="Age" class="form-control">
            </div>
            <div class="col-md-4">
          <label for="inputExamdate" class="form-label">Exam Date</label>
            <input type="date" class="form-control" id="inputExamdate" name="Exam_date" required>
        </div>
 
            <div class="col-md-9">
                <label for="observations">Observations:</label>
                <textarea name="observations" id="observations" class="form-control" rows="8"></textarea>
            </div>

           
</form>

            <button type="submit" class="btn btn-primary">Submit</button>
        
    </div>



@endsection





