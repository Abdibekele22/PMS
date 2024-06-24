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
              </li>
            </ul>
            <div class="tab-content">
                
                <div class="tab-pane fade " id="navs-pills-top-messages" role="tabpanel">
                    <div class="row">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Edit Administrator</h5>
                                    <small class="text-muted float-end">Default label</small>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3">
                                            <label>Avatar</label>
                                            <div>
                                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                                                    <div class="kt-avatar__holder" @if(isset($doctor)) @if(strpos($doctor->picture,'users_pictures')!==false) style="background-image: url({{asset('storage/'.$doctor->picture)}})" @else style="background-image: url({{$doctor->picture}})" @endif  @else style="background-image: url({{asset('storage/nopic.jpg')}});" @endif></div>
                                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen"></i>
                                                        <input type="file" name="picture" accept=".png, .jpg, .jpeg">
                                                    </label>
                                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="first_name">First Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="{{ $doctor->first_name }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="last_name">Last Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="{{ $doctor->last_name }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="national_id" class="form-label">National ID number</label>
                                            <input id="national_id" name="national_id" class="form-control" type="text" placeholder="National ID" value="{{ $doctor->national_id }}" required>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="address">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{ $doctor->address }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="email">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-default-email2" value="{{ $doctor->email }}" required>
                                                    <span class="input-group-text">@example.com</span>
                                                </div>
                                                <div class="form-text">You can use letters, numbers &amp; periods</div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="password" class="col-md-2 col-form-label">Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="password" id="password" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="birth_date" class="col-md-2 col-form-label">Birth Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="date" name="birth_date" id="birth_date" value="{{ $doctor->birth_date }}" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="gender">Gender:</label>
                                            <select class="form-control" name="gender" id="gender">
                                                <option value="male" {{ $doctor->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                <option value="female" {{ $doctor->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="phone" class="col-sm-2 col-form-label">Phone Number:</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" value="{{ $doctor->phone }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="emergency">Emergency Phone Number:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="emergency" id="emergency" placeholder="Emergency Phone Number" value="{{ $doctor->emergency }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="department">Departments</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="department" id="department" placeholder="Departments" value="{{ $doctor->department }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="medical_degree">Medical Degree</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="medical_degree" id="medical_degree" class="form-control phone-mask" aria-label="Medical Degree" aria-describedby="basic-default-phone" value="{{ $doctor->medical_degree }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="biography">Biography</label>
                                            <div class="col-sm-10">
                                                <textarea name="biography" id="biography" class="form-control" placeholder="Biography" aria-describedby="basic-icon-default-message2" rows="5" required>{{ $doctor->biography }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-10">
                                            <label for="role_id" class="col-md-2 col-form-label">Role</label>
                                            <input type="tel" class="form-control" name="role_id" id="role_id" placeholder="Role" value="{{ $doctor->role_id }}" required>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <input type="submit" value="Update" class="btn btn-primary">
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
