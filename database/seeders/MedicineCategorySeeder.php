<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Antibiotic',
            'description' => 'Antibiotic is a medicine used to treat bacterial infections. They either kill or stop the growth of bacteria. Antibiotics are not effective against viral infections, such as colds and flu.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Analgesic',
            'description' => 'Analgesic is a medicine used to treat pain. They are often used for headaches, muscle aches, arthritis, and other conditions that cause pain.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Antihistamine',
            'description' => 'Antihistamine is a medicine used to treat allergies. They are often used to treat hay fever, allergies to insect bites, and other allergies.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Antidepressant',
            'description' => 'Antidepressant is a medicine used to treat depression. They are often used to treat depression, anxiety, and other conditions that cause mood changes.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Antipsychotic',
            'description' => 'Antipsychotic is a medicine used to treat schizophrenia and other mental illnesses. They are often used to treat schizophrenia, bipolar disorder, and other conditions that cause hallucinations and delusions.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Anticonvulsant',
            'description' => 'Anticonvulsant is a medicine used to treat seizures. They are often used to treat epilepsy, seizures, and other conditions that cause seizures.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Antifungal',
            'description' => 'Antifungal is a medicine used to treat fungal infections. They are often used to treat fungal infections, such as athlete\'s foot, ringworm, and yeast infections.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Antiviral',
            'description' => 'Antiviral is a medicine used to treat viral infections. They are often used to treat viral infections, such as colds, flu, and shingles.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Antimalarial',
            'description' => 'Antimalarial is a medicine used to treat malaria. They are often used to treat malaria, a disease caused by a parasite that is spread by mosquitoes.',
        ]);
        \App\Models\MedicineCategory::factory()->create([
            'name' => 'Antidiabetic',
            'description' => 'Antidiabetic is a medicine used to treat diabetes. They are often used to treat diabetes, a disease that causes high blood sugar levels.',
        ]);
    }
}