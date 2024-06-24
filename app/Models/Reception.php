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

class Reception extends  Authenticatable
{
    use HasApiTokens, HasFactory,Notifiable,HasRole;
    protected $table = 'patient';

    protected $fillable = [

        'MRN','Full_Name','gender','Age',
        'Phone_Number','Address','Emergency_CN','Relationship',
        'E_Phone_Number','status'




    ];
}
