<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;
    public $table = "specialists";

    protected $fillable = [
        // 'id',
        'name',
        'description',
    ];



    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
