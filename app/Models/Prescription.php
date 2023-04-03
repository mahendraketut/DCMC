<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo('App\Models\User', 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\User', 'doctor_id');
    }

    public function appointment()
    {
        return $this->belongsTo('App\Models\Appoinment', 'appointment_id');
    }

    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicines', 'medicine_id');
    }
}
