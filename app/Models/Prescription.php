<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Role;
use App\Models\HasRole;

class Prescription extends Model
{
    use HasApiTokens, HasFactory,Notifiable,HasRole;
    protected $fillable = [
        'patient_name',
        'medicine',
        'dosage_instructions',
        'additional_notes',
    ];

    protected $casts = [
        'medicine' => 'array',
    ];
}
