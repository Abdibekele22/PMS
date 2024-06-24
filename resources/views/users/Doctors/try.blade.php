@extends('modules.users.doctors.master')
@section('content')
<div class="row">
    <div class="col-xl-10 text-align-center">
      <h6 class="text-muted">Doctor Management</h6>
      <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="false">
              Assigned patients
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
              Search Patients
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="true">
              History 
            </button>
          </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="navs-pills-top-home" role="tabpanel">
                <p class="mb-0">
                  Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
                  jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow
                  jujubes sweet.
                </p>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Roles</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                  <!-- Search -->
                <div class="search">
                    <h4>Search A Patient</h4>
                    <form method="GET" action="">
                      <div class="form-group row">
                        <label for="searchTerm" class="col-sm-2 col-form-label">Search Term:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="search" placeholder="Search patient">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="order" class="col-sm-2 col-form-label">Order:</label>
                        <div class="col-sm-2">
                          <select class="form-control" id="order">
                          <option value="asc">Ascending</option>
                          <option value="desc">Descending</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!--/ search   -->
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Permissions</th>
                            <th>Speciality</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                </div>

            
              
  
            <div class="tab-pane fade " id="navs-pills-top-messages" role="tabpanel">
                <div class="row">
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Basic Layout</h5>
                            <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                
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