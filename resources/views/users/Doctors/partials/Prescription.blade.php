@extends('users.Doctors.master')
@section ('title','Prescription')
@section('content')
    <div class="container">
        <h1>Prescription Form</h1>

       
        <form class="row g-3" method="POST" action="{{ route('prescriptions.store') }}">
        @csrf
            <div class="col-md-4">
                <label for="patient_name">Patient Name:</label>
                <input type="text" class="form-control" name="patient_name" id="patient_name" class="form-control">
            </div>
           
  <div class="card mt-3">
             
                <div class="card-body">
                    <div class="row">
    <div class="col-sm-12">
        <div class="table-responsive-sm medicineTable">
            <table class="table table-striped" id="prescriptionMedicalTbl">
                <thead class="thead-dark">
                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                    <th class="">Medicines</th>
                    <th class="">Dosage</th>
                    <th class="">Day</th>
                    <th class="">Time</th>
                    <th class="">Comment</th>
                    <th class="table__add-btn-heading text-center form-label fw-bolder text-gray-700 mb-3">
        
                    </th>
                </tr>
                </thead>
                <tbody class="prescription-medicine-container" data-select2-id="select2-data-155-b0qj">
                                    <tr>
                        <td>
                            <select class="form-select prescriptionMedicineId select2-hidden-accessible" name="medicine[]" data-select2-id="select2-data-77-74ty" tabindex="-1" aria-hidden="true">
                              <option value="2" data-select2-id="select2-data-79-v1li">Atenolol</option>
                              <option value="3" data-select2-id="select2-data-156-ifnw">Amlodipine Olmesartan</option>
                              <option value="4" data-select2-id="select2-data-157-zkod">Camylofin</option>
                              <option value="5" data-select2-id="select2-data-158-76j6">Unidex</option>
                              <option value="7" data-select2-id="select2-data-159-39kn">atuonil</option>
                              <option value="10" data-select2-id="select2-data-160-vv7d">risek cap 20 mg 14 s</option>
                              <option value="12" data-select2-id="select2-data-161-9p9p">ffeaf</option>
                              <option value="13" data-select2-id="select2-data-162-3jlv">test1</option>
                              <option value="14" data-select2-id="select2-data-163-smmd">Rabeprezole</option>
                              <option value="15" data-select2-id="select2-data-164-rlf6">Test</option>
                              <option value="18" data-select2-id="select2-data-165-273n">parastamol</option>
                              <option value="19" data-select2-id="select2-data-166-may9">Etodolac</option>
                              <option value="20" data-select2-id="select2-data-167-fdb2">Kétoprofène</option>
                              <option value="21" data-select2-id="select2-data-168-hauy">Ibuprofène</option>
                              <option value="22" data-select2-id="select2-data-169-pgyl">amikacine</option>
                              <option value="23" data-select2-id="select2-data-170-55xw">aztréonam</option>
                              <option value="24" data-select2-id="select2-data-171-d205">amoxicilline</option>
                              <option value="30" data-select2-id="select2-data-172-ysjp">eqwe</option>
                              <option value="33" data-select2-id="select2-data-173-7nia">Trevor Goodwin</option>
                              <option value="35" data-select2-id="select2-data-174-l17c">Metacine</option>
                              <option value="38" data-select2-id="select2-data-175-wf6h">Kalia Tillman</option>
                              <option value="40" data-select2-id="select2-data-176-txw0">Emily Nielsen</option>
                              <option value="41" data-select2-id="select2-data-177-0g42">Orli Walker</option>
                              <option value="43" data-select2-id="select2-data-178-ul47">Ulric Peterson</option>
                              <option value="45" data-select2-id="select2-data-179-i6gi">Grady Banks</option>
                              <option value="48" data-select2-id="select2-data-180-dico">Hollee Acevedo123</option>
                              <option value="51" data-select2-id="select2-data-181-mjyq">Paracetamol 500 mg</option>
                              <option value="52" data-select2-id="select2-data-182-sji3">admin</option>
                              <option value="54" data-select2-id="select2-data-183-qwz0">sdasd</option>
                              <option value="55" data-select2-id="select2-data-184-1brn">panadole</option>
                              <option value="57" data-select2-id="select2-data-185-78gb">Blaine Evans</option>
                              <option value="62" data-select2-id="select2-data-186-2hwy">qweqwe</option>
                              <option value="65" data-select2-id="select2-data-187-1zma">tesr</option>
                              <option value="66" data-select2-id="select2-data-188-mf41">csmcnsdjf</option>
                              <option value="67" data-select2-id="select2-data-189-fdas">A1</option>
                              <option value="68" data-select2-id="select2-data-190-4ucp">DOlo</option>
                              <option value="69" data-select2-id="select2-data-191-d7eq">Yyy</option>
                              <option value="70" data-select2-id="select2-data-192-bvfr">drr</option>
                              <option value="71" data-select2-id="select2-data-193-lov4">ghgfhfh</option>
                              <option value="72" data-select2-id="select2-data-194-ah6l">mohit</option>
                              <option value="73" data-select2-id="select2-data-195-0ily">banadol</option>
                              <option value="74" data-select2-id="select2-data-196-qtkh">Abdulaziz Aian</option>
                              <option value="75" data-select2-id="select2-data-197-jogc">Desi Gau Ghee</option>
                              <option value="76" data-select2-id="select2-data-198-5tvi">dildo</option>
                              <option value="77" data-select2-id="select2-data-199-0rys">fofo</option>
                              <option value="78" data-select2-id="select2-data-200-6d48">test test</option>
                              <option value="79" data-select2-id="select2-data-201-onoc">Panadol</option>
                              <option value="80" data-select2-id="select2-data-202-kujn">My medicine</option>
                              <option value="81" data-select2-id="select2-data-203-6h93">ggg</option>
                              <option value="82" data-select2-id="select2-data-204-wm5u">pcm</option>
                              <option value="83" data-select2-id="select2-data-205-ud17">ghee</option>
                              <option value="84" data-select2-id="select2-data-206-czxu">arv med</option>
                            </select>
                            <!-- <span class="select2 select2-container select2-container--bootstrap-5 select2-container--below" dir="ltr" data-select2-id="select2-data-78-5idf" style="width: 100%;">
                            <span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-medicine-c6-container" aria-controls="select2-medicine-c6-container">

                              <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span>
                              <span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                        </td>
                        <td>
                            <input class="form-control" id="prescriptionMedicineNameId" name="dosage[]" type="text">
                        </td>
                        <td>
                            <input class="form-control" id="prescriptionMedicineDayId" name="day[]" type="text">
                        </td>
                        <td>
                            <select class="form-select prescriptionMedicineMealId select2-hidden-accessible" name="time[]" data-select2-id="select2-data-80-d412" tabindex="-1" aria-hidden="true">
                              <option value="0">After Meal</option>
                              <option value="1">Before Meal</option>
                            </select>
                              
                        </td>
                        <td>
                            <textarea class="form-control" rows="1" name="comment[]" cols="50"></textarea>
                        </td>
                        <td class="text-center">
                            <a href="javascript:void(0)" title="Delete" class="delete-prescription-medicine-item btn px-1 text-danger fs-3 pe-0">
                                <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                  <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">

                                  </path></svg><!-- <i class="fa-solid fa-trash"></i> Font Awesome fontawesome.com -->
                            </a>
                        </td>
                    </tr>   
                                </tbody>
            </table>
        </div>
    </div>
</div>
                </div>
            </div>


            <div class="col-md-8">
                <label for="dosage_instructions">Dosage Instructions:</label>
                <textarea name="dosage_instructions" id="dosage_instructions" class="form-control" rows="3"></textarea>
            </div>

            <div class="col-md-8">
                <label for="additional_notes">Additional Notes:</label>
                <textarea name="additional_notes" id="additional_notes" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
          
       
    </div>

@endsection
