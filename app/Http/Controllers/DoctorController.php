<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reception;
use App\Models\Doctor;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(){
        
        return view('users.Admin.layout.master');
    }
    public function index()
    {
       return view('users.Admin.doctor.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.Admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
//         $users = User::all();
// dd($doctor);



        $doctor = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $request->password,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'department' => $request->department,
            'biography' => $request->biography,
            'phone' => $request->phone,
            'emergency' => $request->emergency,
            'medical_degree' => $request->medical_degree,
            'role_id' =>$request->role_id,


        ]);
        
        if($request->picture){
            $pic = $request->picture->store('doctors_pictures');
            $doctor->picture = $pic;
            $doctor->save();
        }


        if ($request->departments){
            $doctor->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Doctor Added Successfully.');
        // redirect user
        return redirect(route('add.show'));
        session()->flash('success', 'New Doctor Added Successfully.');

    }         

    /**
     * Display the specified resource.
     */
    public function show(User $doctor)
    {
        //

        // dd(User::all());
        return view('users.Admin.doctor.view', ['users'=>User::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor = user::findOrFail( $id);
        return view('users.Admin.doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       // $doctor = User::findOrFail($id);
        $validatedData = $request->validate([
       
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'national_id' => $request->input('national_id'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'birth_date' => $request->input('birth_date'),
            'gender' => $request->input('gender'),
            'department' => $request->input('department'),
            'biography' => $request->input('biography'),
            'phone' => $request->input('phone'),
            'emergency' => $request->input('emergency'),
            'medical_degree' => $request->input('medical_degree'),
            'role_id' => $request->input('role_id'),
        ]);
          $doctor = User::findOrFail($id);
        $doctor->update( $validatedData);
        return redirect()->route('add.doc')->with('success', 'Patient record updated successfully.');
    

    }

    public function destroy(string $id)
    {
        //
    }
    public function searchUsersByRole(Request $request)
{
    $roleId = $request->input('role_id');
    dd(User::all());
     
    $users = User::where('role_id', $roleId)->get();
  
        return view('users.Admin.doctor.create',compact('users'));
  
}
public function searchUsers(Request $request)
{
    $roleId = $request->input('role_id');
   // dd(User::all());
     
    $users = User::where('role_id', $roleId)->get();
    return view('users.Admin.doctor.view', ['users' => $users]);
   // return view('users.Admin.doctor.view',compact('users'));
}

// public function viewPatients()
// {
//     $patients = Reception::all();

//     return view('users.Admin.doctor.patientls', compact('patients'));
// }


}
