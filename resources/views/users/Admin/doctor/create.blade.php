@extends('users.admin.layout.master')
@section('content')
<div class="row">
    <div class="col-xl-10 text-align-center">
      <h6 class="text-muted">Administrator Management</h6>
      <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3" role="tablist">
          <!-- <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="false">
              All Administrators
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
              Active Administrators
            </button>
          </li> -->
          <li class="nav-item">
            <button type="button" class="nav-link  " role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="true">
              New Administrator
            </button>
          </li>
          <li class="nav-item">
             <a href="{{ route('add.show') }}"  class="btn btn-primary"> View</a>
        </ul>
        <div class="tab-content">
            
            <div class="tab-pane fade " id="navs-pills-top-messages" role="tabpanel">
                <div class="row">
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Admition Form</h5>
                            <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form   action="{{route('add.show')}}"
                              method="POST"
                              enctype="multipart/form-data">
                              @csrf
                                <div class="row mb-3">
                                    <label>Avatar</label>
                                    <div>
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                                            <div class="kt-avatar__holder" @if(isset($doctor)) @if(strpos($doctor->picture,'users_pictures')!==false) style="background-image: url({{asset('storage/'.$doctor->picture)}})" @else style="background-image: url({{$doctor->picture}})" @endif  @else style="background-image: url({{asset('storage/nopic.jpg')}});" @endif>

                                            </div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen"></i>
                                                <input type="file" name="picture" accept=".png, .jpg, .jpeg"  required>
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first_name" 
                                        value="{{isset($doctor) ? $doctor->first_name : ''}}"
                                        required>
                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="last_name" id="last_name" placeholder="last_name"  
                                        value="{{isset($doctor) ? $doctor->last_name : ''}}"
                                        required>
                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="defaultInput" class="form-label">National ID number</label>
                                      <input id="national_id" name="national_id" class="form-control" type="text" placeholder="national id" 
                                      value="{{isset($doctor) ? $doctor->national_id : ''}}" required>
                                    </div>
                                    <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-adress">Address</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="address" id="address" placeholder="ACME Inc."  
                                   value= "{{isset($doctor) ? $doctor->address : ''}}"  required>
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                                  <div class="col-sm-10">
                                      <div class="input-group input-group-merge">
                                      <input type="email" name="email" id="email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2"  
                                      value="{{isset($doctor) ? $doctor->email : ''}}"
                                      required>
                                      <span class="input-group-text" name="email" id="email">@example.com</span>
                                      </div>
                                      <div class="form-text">You can use letters, numbers &amp; periods</div>
                                  </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
                                    <div class="col-md-10">
                                      <input class="form-control" type="password" name="password"  id="password" required>
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label for="html5-number-input" class="col-md-2 col-form-label">Age</label>
                                    <div class="col-md-10">
                                      <input class="form-control" type="date"  name="birth_date" id="birth_date" max=100 min=27  
                                      value="{{isset($doctor) ? $doctor->birth_date : ''}}" required>
                                    </div>
                                  </div>  
                                  <div class="mb-3 row">
                                    <label for="gender">Gender:</label>
                                    <select class="form-control" name="gender" id="gender">
                                      <option value="male" @if(isset($doctor)) {{$doctor->gender == 'male' ? 'selected' : ''}} @endif>Male</option>
                                      <option value="female" @if(isset($doctor)) {{$doctor->gender == 'female' ? 'selected' : ''}} @endif>Female</option>
                                      <option value="other">Other</option>
                                    </select>
                                  </div> 
                                  <div class="col-md-10">
                                    <label for="phone" class="col-md-2 col-form-label">Phone Number:</label>
                                    <input type="tel"  type="phone" class="form-control"  name="phone" id="phone" placeholder="Enter phone number"  
                                    value="{{isset($doctor) ? $doctor->phone : ''}}"
                                    required>
                                  </div> 
                                    
                                  <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" for="basic-default-company">Emergency Phone Number:</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="emergency" id="emergency" placeholder="ACME Inc."  
                                      value="{{isset($doctor) ? $doctor->emergency : ''}}" required>
                                  </div>
                                  </div>
                                  <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" for="basic-default-company">Departments</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="department"  id="department" placeholder="ACME Inc."  
                                       value="{{isset($doctor) ? $doctor->department : ''}}"
                                      required>
                                  </div>
                                  </div>
                                  <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" for="basic-default-phone">Medical Degree</label>
                                  <div class="col-sm-10">
                                      <input type="text" name="medical_degree"  id="medical_degree" class="form-control phone-mask" aria-label="658 799 8941" aria-describedby="basic-default-phone" 
                                    value= "{{isset($doctor) ? $doctor->medical_degree : ''}}" required>
                                  </div>
                                  </div>
                                  <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" for="basic-default-message">Biography</label>
                                  <div class="col-sm-10">
                                      <textarea name="biography" id="biography" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" 
                                     aria-describedby="basic-icon-default-message2"  required  rows="5">{{isset($doctor) ? $doctor->biography : ''}}</textarea>
                                  </div>
                                  </div>
                                  <div class="col-md-10">
                                    <label for="phone" class="col-md-2 col-form-label">Role</label>
                                    <input type="tel" class="form-control"  name="role_id" id="role_id" placeholder="Enter role" max=7 min=2 
                                    value= "{{isset($doctor) ? $doctor->role_id : ''}}" required>
                                  </div> 
                                  <div class="row justify-content-end">
                                  <div class="col-sm-10">
                                      <input type="submit"  value="{{isset($doctor) ? 'Update' : 'Submit'}}" class="btn btn-primary">
                                      <input type="reset" class="btn-lg btn-danger" value="Cancel">
                                  </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection