@extends('users.Doctors.master')
@section('title','Upcoming Appointments List')
@section('content')
     <section>
      <h2 class="text-center mt-5">Upcoming Appointments</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Patient Name</th>
            <th>Contact Details</th>
            <th>Date</th>
            <th>Time</th>
            <th>Appointed to</th>
          </tr>
        </thead>
        <tbody>
           <!-- Use server-side scripting or JavaScript to populate the table with appointment data  -->
          <tr>
            <td>John Doe</td>
            <td>johndoe@example.com</td>
            <td>2023-03-03</td>
            <td>10:00 AM</td>
            <td>Dr. Ash</td>
          </tr>
          <tr>
            <td>Jane Smith</td>
            <td>janesmith@example.com</td>
            <td>2023-03-04</td>
            <td>2:30 PM</td>
          </tr>
        </tbody>
      </table>
    </section>     
@endsection
