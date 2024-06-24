<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Role;


class CreateUserWithRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user-with-roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
               // Create user Abdi with role Admin
$abdi = new User();
$abdi->name = 'Abdi';
$abdi->phone = '+1234567890';
$abdi->password = bcrypt('password');
$abdi->save();
$adminRole = Role::where('name', 'Admin')->first();
$abdi->role()->associate($adminRole);
$abdi->save();

// Create user Hirut with role Doctor
$hirut = new User();
$hirut->name = 'Hirut';
$hirut->phone = '+0987654321';
$hirut->password = bcrypt('password');
$hirut->save();
$doctorRole = Role::where('name', 'Doctor')->first();
$hirut->role()->associate($doctorRole);
$hirut->save();

// Create user Abenezer with role Patient
$abenezer = new User();
$abenezer->name = 'Abenezer';
$abenezer->phone = '+9876543210';
$abenezer->password = bcrypt('password');
$abenezer->save();
$patientRole = Role::where('name', 'Patient')->first();
$abenezer->role()->associate($patientRole);
$abenezer->save();

// Create user Adis with role Receptionist
$adis = new User();
$adis->name = 'Adis';
$adis->phone = '+0123456789';
$adis->password = bcrypt('password');
$adis->save();
$receptionistRole = Role::where('name', 'Receptionist')->first();
$adis->role()->associate($receptionistRole);
$adis->save();

// Create user Kidist with role Lab Technician
$kidist = new User();
$kidist->name = 'Kidist';
$kidist->phone = '+8765432109';
$kidist->password = bcrypt('password');
$kidist->save();
$labTechnicianRole = Role::where('name', 'Lab Technician')->first();
$kidist->role()->associate($labTechnicianRole);
$kidist->save();

// Create user Ismael with role Pharmacist
$ismael = new User();
$ismael->name = 'Ismael';
$ismael->phone = '+7654321098';
$ismael->password = bcrypt('password');
$ismael->save();
$pharmacistRole = Role::where('name', 'Pharmacist')->first();
$ismael->role()->associate($pharmacistRole);
$ismael->save();

// Create user Sedame with role Nurse
$sedame = new User();
$sedame->name = 'Sedame';
$sedame->phone = '+5432109876';
$sedame->password = bcrypt('password');
$sedame->save();
$nurseRole = Role::where('name', 'Nurse')->first();
$sedame->role()->associate($nurseRole);
$sedame->save();
    
$this->info('Users created and roles assigned successfully.');
    }
}
