<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicine_id',
        'name',
        'description',
        'price',
        'quantity',
        'image',
        'category_id',
        'status',
        'expiry_date',
        'manufacture_date',
        'manufacture_company',
        'generic_name',
        'dosage',
        'side_effects',
        'precautions',
        'storage',
        'how_to_use',
        'how_it_works',
        'other_information',
        'composition',
    ];

    public function MedicineCategory()
    {
        return $this->belongsTo(MedicineCategory::class, 'category_id');
    }
}
