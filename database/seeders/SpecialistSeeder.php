<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Specialist::factory()->create([
            'name' => 'Endodontist',
            'description' => 'Endodontists are dentists who specialize in the prevention, diagnosis, and treatment of diseases and injuries of the dental pulp and surrounding tissues of the teeth. Endodontists are also known as root canal specialists.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Dentist',
            'description' => 'Dentists are doctors who specialize in the prevention, diagnosis, and treatment of diseases and conditions of the oral cavity. The oral cavity includes the teeth and gums and other tissues in the mouth.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Orthodontist',
            'description' => 'Orthodontists are dentists who specialize in the prevention, diagnosis, and treatment of dental and facial irregularities. Orthodontists correct teeth and jaws that are positioned improperly. They also treat jaw joint disorders, such as TMJ.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Periodontist',
            'description' => 'Periodontists are dentists who specialize in the prevention, diagnosis, and treatment of diseases and conditions that affect the gums and supporting structures of the teeth, as well as the replacement of teeth.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Prosthodontist',
            'description' => 'Prosthodontists are dentists who specialize in the restoration and replacement of teeth. They are experts in the field of dentures, dental implants, crowns, bridges, and veneers.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Pediatric Dentist',
            'description' => 'Pediatric dentists are dentists who specialize in the prevention, diagnosis, and treatment of dental and oral conditions in children from infancy through the teen years. They are also known as pediatric dental specialists.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Oral and Maxillofacial Surgeon',
            'description' => 'Oral and maxillofacial surgeons are dentists who specialize in the diagnosis, surgical and adjunctive treatment of diseases, injuries and defects involving both the functional and esthetic aspects of the hard and soft tissues of the oral and maxillofacial region.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Dental Hygienist',
            'description' => 'Dental hygienists are licensed dental professionals who provide preventive oral health services under the supervision of a dentist. They are also known as dental therapists.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Dental Assistant',
            'description' => 'Dental assistants are licensed dental professionals who provide preventive oral health services under the supervision of a dentist. They are also known as dental therapists.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Dental Technician',
            'description' => 'Dental technicians are licensed dental professionals who provide preventive oral health services under the supervision of a dentist. They are also known as dental therapists.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Radiologist',
            'description' => 'Radiologists are doctors who specialize in the diagnosis and treatment of diseases using medical imaging techniques, such as X-rays, CT scans, MRIs, and ultrasounds.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Dentist Anaesthesiologist',
            'description' => 'Dentist Anaesthesiologists are doctors who specialize in the diagnosis and treatment of diseases using medical imaging techniques, such as X-rays, CT scans, MRIs, and ultrasounds.'
        ]);
        \App\Models\Specialist::factory()->create([
            'name' => 'Cosmetic Dentist',
            'description' => 'Cosmetic Dentists are doctors who specialize in the diagnosis and treatment of diseases using medical imaging techniques, such as X-rays, CT scans, MRIs, and ultrasounds.'
        ]);
    }
}
