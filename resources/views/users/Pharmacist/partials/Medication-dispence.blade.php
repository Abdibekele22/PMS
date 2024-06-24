@extends('users.pharmacist.master')
@section('title','Medication-dispence')
@section('content')
    <div class="container">
        <h1>Medication Dispensing</h1>
        <section>
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Patient Name</th>
            <th>Date</th>
            <th> Physician name</th>
            <th>Medication type</th>
            <th>Duration</th>
          </tr>
        </thead>
        <tbody>
           <!-- Use server-side scripting or JavaScript to populate the table with appointment data  -->
          <tr>
            <td>John Doe</td>
            <td>2023-03-03</td>
            <td>Dr ekele</td>
            <td>medication name</td>
            <td>2 month</td>
          </tr>
         
        </tbody>
      </table>
    </section>     

@endsection