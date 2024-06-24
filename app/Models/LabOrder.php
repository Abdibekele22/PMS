<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_id',
        'requested_test',
        'test_description',

        'physician_name',
        'additional_notes',
    ];

}
