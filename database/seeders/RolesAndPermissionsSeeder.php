<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $roles = [
            'Admin',
            'Doctor',
            'Nurse',
            'Lab Technician',
            'Receptionist',
            'Patient',
            'Pharmacist',
        ];
    
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
