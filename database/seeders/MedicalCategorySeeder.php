<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //make list of mouth disease name
        \App\Models\MedicalCategory::factory()->create([
            'name' => 'Gingivitis',
        ]);

        \App\Models\MedicalCategory::factory()->create([
            'name' => 'Periodontitis',
        ]);

        \App\Models\MedicalCategory::factory()->create([
            'name' => 'Abscess Peridontal',
        ]);

        \App\Models\MedicalCategory::factory()->create([
            'name' => 'Stomatis Aphthous',
        ]);
    }
}