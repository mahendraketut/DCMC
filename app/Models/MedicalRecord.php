<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'patient_id',
        'doctor_id',
        'appointment_id',
        'date',
        'complaints',
        'diagnosis',
        'medical_category_id',
        'treatment',
        'prescription',
        'next_appointment',
        'notes',
        'status',
        'description',
    ];

    public function Patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function Doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function MedicalRecord()
    {
        return $this->hasMany(MedicalRecord::class, 'record_id');
    }

    public function MedicalCategory()
    {
        return $this->belongsTo(MedicalCategory::class, 'medical_category_id');
    }

    public function Appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
}
