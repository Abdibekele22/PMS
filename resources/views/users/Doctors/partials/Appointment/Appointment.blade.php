@extends('users.Doctors.master')
@section('content')
<header>
      <h1 class="text-center">Patient Appointment System</h1>
    </header>
    <section>
      <div class="row justify-content-center">
        <div class="col-md-6">
        <form action="{{ route('appointments.store') }}" method="POST" class="row g-3">
        @csrf
            <div class="mb-3">
              <label for="patientName" class="form-label">Patient Name</label>
              <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter patient name">
            </div>
            <div class="mb-3">
              <label for="contactDetails" class="form-label">MRN</label>
              <input type="number" class="form-control" id="mrn" name="mrn" placeholder="patient MRN">
            </div>
            <div class="mb-3">
              <label for="contactDetails" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="contact_details"  name="contact_details"placeholder="Enter contact details">
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Date</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="mb-3">
              <label for="time" class="form-label">Time</label>
              <input type="time" class="form-control" id="time" name="time">
            </div>
            <div class="mb-3">
    <label for="inputChiefcomplaint" class="form-label">Discription of follow up</label>
    <textarea name="description" id="description" class="form-control" rows="7"></textarea>
   
  </div>
  <div class="col-md-4">
  <label class="inputHistorian " class="form-lable">Appointed to</label>
  <select class="form-select" id="appointed_to" name="appointed_to">
    <option value="Internal Medicine OPD">Internal Medicine OPD</option>
    <option value="Sergical">Sergical</option>
    <option value="pediatrics">pediatrics</option>
    <option value="gueny">gueny</option>
  </select>
</div>
<div class="col-md-4">
  <label class="inputHistorian " class="form-lable">Status</label>
  <select class="form-select" id="status"  name="status">
    <option value="Active">Active</option>
    <option value="Pending">Pending</option>
    <option value="cancelled">cancelled</option>
 
  </select>
</div>
<div class="text-center">
  <button type="submit" class="btn btn-primary">Schedule Appointment</button>
</div>
</form>
</div>
</div>
</section>
@endsection