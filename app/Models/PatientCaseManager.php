<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientCaseManager extends Model
{
    use SoftDeletes;


    public function patient() 
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
