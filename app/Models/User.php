<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */

    protected $fillable = [
        'name',
        'email',
        'password',
        'admin_id',
        'doctor_id',
        'pharmacist_id',
        'patient_id',
        'username',
        'email',
        'phone',
        'gender',
        'dob',
        'address',
        'city',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<string>
     */

    protected $hidden = [
        'password',
        'remember_token',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function pharmacist()
    {
        return $this->belongsTo(Pharmacist::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}