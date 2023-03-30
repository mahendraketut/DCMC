<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialistCategory extends Model
{
    use HasFactory;

    protected $table = 'specialist_categories';

    protected $fillable = [
        'name',
        'description',
    ];

    public function specialist()
    {
        return $this->hasMany(Specialist::class);
    }
}
