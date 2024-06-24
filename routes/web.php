<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\LabRequestController;
use App\Http\Controllers\PrescriptionControllr;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\AppointmentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {     return view('welcome');
});

// Exclude login route from authentication middleware

// Route::middleware('web')->group(function () {
// });
Route::middleware(['auth','role'])->group(function()
    {
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    }
);
 //
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//route for dark_mode
Route::get('/toggle-dark-mode', [DarkModeController::class, 'toggle'])->name('toggle-dark-mode');
Route::post('/toggle-dark-mode', [DarkModeController::class, 'toggle'])->name('toggle-dark-mode');
/////////dashboard////////////////////


//Route::get('/doctor/dash',[DocController::class, 'dashboard'])->name('D.dashboard');
Route::get('/doctor/dash',[DocController::class,'dashboard'])->name('Doc.dash');
Route::get('/admin/dash',[DoctorController::class, 'dashboard'])->name('A.dashboard');
Route::get('/nurses/dashboard',[NurseController::class, 'dashboard'])->name('nurse.dashboard');
Route::get('/receptionist/dashboard',[ReceptionController::class, 'dashboard'])->name('receptionist.dashboard');


Route::group(['middleware'=>[RoleMiddleware::class.'role:Admin']],function(){

    Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dash');
});

Route::group(['middleware'=>[RoleMiddleware::class.'role:Doctor']],function(){

    Route::get('doctor/dashboard',[DoctorController::class,'dashboard']);
});
Route::group(['middleware'=>[RoleMiddleware::class.'role:Nurse']],function(){


    Route::get('doctor/dashboard',[NurseController ::class,'dashboard']);
});
/////////////////view from doc side from receptio////////////
//Route::get('/patients', [App\Http\Controllers\DoctorController::class, 'viewPatients'])->name('patients.list');
//Route::get('/patientsls', [App\Http\Controllers\DocController::class, 'viewPatients'])->name('patients.list');
Route::get('/patientsls', [DocController::class, 'viewPatients'])->name('patients.list');
Route::get('/patientsls', [DocController::class, 'vital_sign'])->name('show.vital');

Route::resource('/doctors', 'DoctorController');
 Route::post('/doctors', [DoctorController::class,'store'])->name('doctor.store');

Route::get('/doctors', 'App\Http\Controllers\DoctorController@store')->name('doctor.store');
Route::get('/doctors', [DoctorController::class, 'store'])->name('doctort.show');
Route::get('/add_users', [DoctorController::class,'index'])->name('add.doc');
Route::get('/doctors', [DoctorController::class,'show'])->name('add.show');
Route::post('/doctors', [DoctorController::class,'store'])->name('add.show');
Route::get('/doctors/{id}/edit', 'DoctorController@edit')->name('doctors.edit');
//Route::get('/user/{id}/edit', [DoctorController::class,'edit'])->name('doctor_edit');
Route::get('/user/{id}/edit', [DoctorController::class,'edit'])->name('doctor_edit');
Route::post('/doctors', [DoctorController::class,'store'])->name('doctors.edit');
Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');
// Route::resource('/doctor', 'DoctorController');
// Route::get('/users/search', [DoctorController::class, 'searchUsersByRole'])->name('users.search');
// Route::view('/users', 'users.Admin.doctor.create')->name('users.search.form');
Route::get('/users/search', [DoctorController::class, 'searchUsersByRole'])->name('users.search');
Route::view('/users', 'users.Admin.doctor.create')->name('users.search.form');
Route::get('/users/search', [DoctorController::class, 'searchUsers'])->name('cusers_search');
Route::view('/users', 'users.Admin.doctor.view')->name('users_search');
////////////////////prescription/////////////////////
Route::get('/prescriptions', [PrescriptionControllr::class, 'index'])->name('prescriptions.index');
Route::get('/prescriptions/create', [PrescriptionControllr::class, 'create'])->name('prescriptions.create');
Route::post('/prescriptions', [PrescriptionControllr::class, 'store'])->name('prescriptions.store');
Route::post('/prescriptions', [PrescriptionControllr::class, 'store'])->name('prescriptions.store');
Route::post('/prescriptions/{id}/edit', [PrescriptionControllr::class, 'show'])->name('prescriptions.show');
Route::get('/prescriptions/show', [PrescriptionControllr::class, 'show'])->name('prescriptions.show');
Route::get('/prescriptions/{id}/edit', [PrescriptionControllr::class, 'edit'])->name('prescriptions.edit');
Route::put('/prescriptions/{id}', [PrescriptionControllr::class, 'update'])->name('prescriptions.update');
Route::post('/prescriptions/search', [PrescriptionControllr::class, 'search'])->name('prescriptions.search');

///////////////////lab


Route::post('/lab', [LabRequestController::class,'store'])->name('lab.store');
Route::get('/laborder/create', [LabRequestController::class, 'create'])->name('lab.create');
Route::get('/l', [LabRequestController::class,'index'])->name('lab.index');
Route::get('/lab-orders', [LabRequestController::class,'show'])->name('lab-orders.show');


//////////////////////////medical note//////////////////
Route::get('/MedicalNote', [MedicalController::class, 'index'])->name('mednote.index');
Route::get('/MedicalNote/create', [MedicalController::class, 'create'])->name('mednote.create');
Route::post('/MedicalNote', [MedicalController::class, 'store'])->name('mednote.store');
Route::get('/MedicalNote/show', [MedicalController::class,'show'])->name('mednote.show');
Route::get('/Medicalnote/{id}/edit', [MedicalController::class, 'edit'])->name('mednote.edit');
Route::delete('/medical/delete/{id}', [MedicalController::class, 'destroy'])->name('mednote.destroy');

Route::post('/medical_notes/{id}', [MedicalController::class, 'update'])->name('mednote.update');
//Route::post('/medical_notes/{id}', 'MedicalController@update')->name('mednote.update');
/////////////////////////////////Appointment//////////////////


Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');
Route::get('/appointments/search', [AppointmentController::class, 'search'])->name('appointments.search');




/////////////////////////////nurse/////////////////////////////////////
Route::resource('/nurses','NurseController');
Route::get('/list', [NurseController::class, 'viewPatients'])->name('Npatients.list');
Route::get('/nursesc',[NurseController::class,'create'])->name('nurse.create');
Route::post('/nurses',[NurseController::class,'store'])->name('nurse.store');





//////////////////////////////////////////////////////////////////////////
//Doctor                ///
/////////////////////
Route::get('/patient-list', function () {
    return view('users.doctors.partials.Patient-detail');
})->name('patient-detail');
Route::get('/patient', function () {
    return view('users.doctors.partials.patientls');
})->name('patient-list');
Route::get('/presc',function(){
    return view('users.doctors.partials.Prescription');
})->name('prescription');

;





/////////////////////reception////////////
// Route::resource('patient','PatientController')->middleware(['auth']);

Route::prefix('receptionist')->group(function () {

    Route::get('/master', function () {
        return view('users.Receptionist.master');
    })->name('receptionist');
    Route::get('/account', function () {
        return view('users.Receptionist.partials.pages-account');
    })->name('pages-account');
});
// Route::get('/p_r',function(){
// return view('users.Receptionist.partials.patient Registration');
// })->name('patient_reg');

////////////////////////////////reception usingC//
Route::get('/patients', [ReceptionController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [ReceptionController::class, 'create'])->name('patients.create');
Route::post('/patients', [ReceptionController::class, 'store'])->name('patients.store');
Route::post('/patients', [ReceptionController::class, 'store'])->name('patients.store');

Route::get('/patients/{id}/edit', [ReceptionController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{id}', [ReceptionController::class, 'update'])->name('patients.update');
Route::post('/patients/search', [ReceptionController::class, 'search'])->name('patients.search');











////////////////////////////////////////////

Route::prefix('pharmacist')->group(function () {
    // pharmacist routes
    
    Route::get('/pharm', function () {
        return view('users.pharmacist.master');
    })->name('pharm');  
    Route::get('/disp', function () {
        return view('users.pharmacist.partials.Medication-dispence');
    })->name('disp');  
    Route::get('/med',function(){
        return view('users.pharmacist.partials.Medication-order');
    })->name('med');
    Route::get('/list',function(){
        return view('users.pharmacist.partials.Available medicine');
    })->name('list');

});
Route::prefix('labtechnician')->group(function () {
    // Lab routes
    Route::get('/lab', function () {
        return view('users.labtechnician.master');
    })->name('lab');  
    Route::get('/la', function () {
        return view('users.labtechnician.partials.labresult');
    })->name('la'); 
});
















/////////////////////////////////////





    
   




// Route::get('/umadmin', function () {
//     return view('users.Admin.doctor.create');
// })->name('add_doc');





// Route::middleware(['web', \App\Http\Middleware\CheckRole::class])->group(function () {

//     // Routes accessible to all authenticated users
//     Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//     Route::get('/profile', 'ProfileController@index')->name('profile');



//     // Middleware group for 'admin' role
//     Route::middleware(['role:admin'])->group(function () {

//         // Routes accessible only to users with the 'admin' role
//         Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
//         Route::get('/admin/users', 'AdminController@users')->name('admin.users');
//     });



//      // Middleware group for 'doctor' role
//      Route::middleware(['role:doctor'])->group(function () {
//         // Routes accessible only to users with the 'doctor' role
//         Route::get('/doctor/dashboard', 'DoctorController@index')->name('doctor.dashboard');
//         Route::get('/doctor/patients', 'DoctorController@patients')->name('doctor.patients');
//     });




//     // Middleware group for 'patient' role
//     Route::middleware(['role:patient'])->group(function () {
//         // Routes accessible only to users with the 'patient' role
//         Route::get('/patient/dashboard', 'PatientController@index')->name('patient.dashboard');
//         Route::get('/patient/appointments', 'PatientController@index')->name('patient.appointments');
//     });





// });



// Route::group(['middleware' => 'role:admin'], function () {
//     // Admin-only routes
//     Route::get('/users', 'AdminController@users');
// });

// Route::group(['middleware' => 'role:doctor'], function () {
//     // Doctor-only routes
//     Route::get('/patients', 'DoctorController@patients');


// });

// Route::group(['middleware' => 'role:nurse'], function () {
//     // Admin-only routes
// });

// Route::group(['middleware' => 'role:receptionist'], function () {
//     // Doctor-only routes
// });

// Route::group(['middleware' => 'role:pharmacist'], function () {
//     // Admin-only routes
// });

// Route::group(['middleware' => 'role:patient'], function () {
//     // Doctor-only routes
// });

// // Define routes for other roles similarly

