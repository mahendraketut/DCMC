<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'patient_id',
        'doctor_id',
        'schedule_id',
        'status',
        'clinic_type',
        'appointment_date',
        'appointment_time',
    ];

    public function patient()
    {
        return $this->belongsTo('App\Models\User', 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\User', 'doctor_id');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule', 'schedule_id');
    }

    public function medicalRecord()
    {
        return $this->hasOne('App\Models\MedicalRecord', 'appointment_id');
    }



    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function prescription()
    {
        return $this->hasOne(Prescription::class, 'prescription_id');
    }

    // public function patient()
    // {
    //     return $this->belongsTo(User::class, 'patient_id');
    // }
}
