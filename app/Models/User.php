<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'username',
        'email',
        'gender',
        'dob',
        'phone',
        'address',
        'city',
        'password',
        'role',
        'google_id',
        'profile_pic',
        'specialist',
        'license',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'LIKE', '%'.$search.'%')
                     ->orWhere('specialist', 'LIKE', '%'.$search.'%');
    }
}