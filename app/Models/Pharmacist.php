<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */

    protected $fillable = [
        'pharmacist_id',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}