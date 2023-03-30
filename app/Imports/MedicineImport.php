<?php

namespace App\Imports;

use App\Models\Medicines;
use Maatwebsite\Excel\Concerns\ToModel;
use MaatWebsite\Excel\Concerns\WithCustomCsvSettings;

// use MaatWebsite\Excel\Concerns\WithStartRow;

/**
 * Summary of MedicineImport
 */
class MedicineImport implements ToModel, WithCustomCsvSettings
{
    // /**
    //  * Summary of startRow
    //  * @return int
    //  */
    // public function startRow(): int
    // {
    //     return 2;
    // }

    /**
     * Summary of getCsvSettings
     * @return array
     */
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';',
            'enclosure' => '"',
            'output_encoding' => 'UTF-8',
        ];
    }

    /**
     * Summary of model
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Medicines([
            'medicine_id' => $row[0],
            'name' => $row[1],
            'description' => $row[2],
            'price' => $row[3],
            'quantity' => $row[4],
            'image' => $row[5],
            'category_id' => $row[6],
            'status' => $row[7],
            'expiry_date' => $row[8],
            'manufacture_date' => $row[9],
            'manufacture_company' => $row[10],
            'generic_name' => $row[11],
            'dosage' => $row[12],
            'side_effects' => $row[13],
            'precautions' => $row[14],
            'storage' => $row[15],
            'how_to_use' => $row[16],
            'how_it_works' => $row[17],
            'other_information' => $row[18],
            'composition' => $row[19],
        ]);
    }

    /**
     */
    public function __construct()
    {
    }
}
