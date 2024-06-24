<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor - @yield('title')</title>

<!-- Include necessary CSS and JS assets -->
          <link href="{{ asset('templates/boxicons.css') }}" rel="stylesheet">
          <link href="{{ asset('templates/core.css') }}" rel="stylesheet" class="template-customizer-core-css">
          <link href="{{ asset('templates/theme-default.css') }}" rel="stylesheet" class="template-customizer-theme-css">
          <link href="{{ asset('templates/perfect-scrollbar.css') }}" rel="stylesheet">
          <link rel="stylesheet" href="{{ asset('templates/styles.css')}}">
          <script src="{{ asset('templates/helpers.js') }}"></script>

  <style type="text/css">
    .layout-menu-fixed .layout-navbar-full .layout-menu,
    .layout-page {
      padding-top: 0px !important;
    }
    .content-wrapper {
      padding-bottom: 0px !important;
    }
    .patient-row.checked {
    background-color: #f5f5f5; /* Change this to your desired color */
    /* Add any other styles for checked patients */
}

    </style>
    <script href="{{ asset('templates/config.js') }}"></script>
  <!-- Custom CSS -->
  

    
</head>
<body>
  <div class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/Home">
        <img src="{{ asset('templates/DillaHeader2.png') }}" alt="" style="margin-left: 25px; margin-bottom:-12px; margin-top:-12px; width: 110% !important;">
    </a> 
    <div class="navbar-collapse collapse"></div>
  </div>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
        <div class="app-brand demo">
          <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="{{ asset('templates/doc.jfif') }}" style="max-width: 20%;" alt="Logo" >
            </span>
          </a>
          <span class="app-brand-text demo menu-text fw-bolder ms-2">DOCTOR </span>
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>
        <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1 overflow-auto">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="#" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Doctor Dashboard</div>
            </a>
          </li>
          <!-- Layouts -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">MANAGE</span></li>
          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Patient Management</div>
            </a>
            <ul class="menu-sub" >
            <li class="menu-item">
                <a href="{{route('show.vital')}}" class="menu-link">
                  <div data-i18n="Without navbar">Patient List</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('patient-detail') }}" class="menu-link">
                  <div data-i18n="Without menu">Patient card</div>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Investigation</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ route('lab.create') }}" class="menu-link">
                  <div data-i18n="Without menu">Lab Request</div>
                </a>
              </li>
              
              <li class="menu-item">
                <a href="{{ route('lab-orders.show')}}" class="menu-link">
                  <div data-i18n="Without menu">Lab Result</div>
                </a>
              </li>
              
            </ul>
          </li>


          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Prescription</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route ('prescriptions.create') }}" class="menu-link">
                  <div data-i18n="Without menu">Write Prescription</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{route ('prescriptions.index') }}" class="menu-link">
                  <div data-i18n="Without navbar">Prescription Detail</div>
                </a>
              </li>
            </ul>
          </li>


          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Appointment</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route('appointments.create')}}" class="menu-link">
                  <div data-i18n="Without menu">Schedule Appointment</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{route('appointments.index')}}" class="menu-link">
                  <div data-i18n="Without navbar">Upcoming Appointment</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Medical Note</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route ('mednote.create') }} "class="menu-link">
                  <div data-i18n="Without menu">Medical note</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Without navbar">Without navbar</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Reports</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Without menu">Referral</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Without navbar">prescription</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Container">test results</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <div class="layout-page">
        <nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm::before"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">  
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <span></span>
              </li>
  
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">Abeni</span>
                          <small class="text-muted">Doctor</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{route('logout')}}">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
            @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="layout-overlay layout-menu-toggle"></div>   
<!-- Bootstrap JS -->
      <script src="{{ asset('templates/jquery.js') }}"></script>
      <script src="{{ asset('templates/popper.js') }}"></script>
      <script src="{{ asset('templates/bootstrap.js') }}"></script>
      <script src="{{ asset('templates/perfect-scrollbar.js') }}"></script>
      <script src="{{ asset('templates/menu.js') }}"></script>
      <script src="{{ asset('templates/main.js') }}"></script>
      <!-- Custom JS -->
      <script async="" defer="" src="{{ asset('templates/buttons.js') }}"></script>

</body>
</html>