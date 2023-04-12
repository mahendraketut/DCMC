<?php

namespace App\Imports;

use App\Models\Medicines;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MedicinesImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        $rows = $rows->skip(1);
        foreach ($rows as $row) {
            $medicine = Medicines::where('name', $row[0])->first();
            if ($medicine) {
                $medicine->quantity = $medicine->quantity + $row[3];
                $medicine->save();
            } else {
                $config = [
                    'table' => 'medicines',
                    'field' => 'medicine_id',
                    'length' => 10,
                    'prefix' => 'MED' . date('YmdHis')
                ];

                $medicine_id = IdGenerator::generate($config);

                $medicine = new Medicines();
                $medicine->medicine_id = $medicine_id;
                $medicine->name = $row[0];
                $medicine->description = $row[1];
                $medicine->price = $row[2];
                $medicine->quantity = $row[3];
                $medicine->image = $row[4];
                $medicine->category_id = $row[5];
                $medicine->status = $row[6];
                $medicine->expiry_date = $row[7];
                $medicine->manufacture_date = $row[8];
                $medicine->manufacture_company = $row[9];
                $medicine->generic_name = $row[10];
                $medicine->dosage = $row[11];
                $medicine->side_effects = $row[12];
                $medicine->precautions = $row[13];
                $medicine->storage = $row[14];
                $medicine->how_to_use = $row[15];
                $medicine->how_it_works = $row[16];
                $medicine->other_information = $row[17];
                $medicine->composition = $row[18];
                $medicine->save();
            }
        }
    }
}