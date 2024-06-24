<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Role;
use App\Models\HasRole;

class Appointment extends Model
{
    use HasApiTokens, HasFactory,Notifiable,HasRole;
    protected $fillable = [
        'patient_name',
        'mrn',
        'contact_details',
        'date',
        'time',
        'description',
        'appointed_to',
        'status',
    ];
}
