<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalNote extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'Age',
        'diagnosis',
        'remark',
        'patient_condition',
        'investigations',
    ];
}
