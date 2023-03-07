<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */

    protected $fillable = [
        'doctor_id',
        'profile_description',
        'license',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<string>
     */

    protected $hidden = [
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

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}