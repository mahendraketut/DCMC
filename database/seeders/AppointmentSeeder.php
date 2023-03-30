<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Appointment::factory()->create([
        //     'appointment_id' => 'AP0001',
        //     'patient_id' => '4',
        //     'doctor_id' => '2',
        //     'schedule_id' => '1',
        //     'status' => 'Pending',
        //     'clinic_type' => 'Reservation',
        //     'appointment_date' => '2023-03-21',
        //     'appointment_time' => '09:00:00',
        // ]);
        \App\Models\Appointment::factory()->create([
            'appointment_id' => 'AP0002',
            'patient_id' => '5',
            'doctor_id' => '2',
            'schedule_id' => '1',
            'status' => 'Pending',
            'clinic_type' => 'Emergency',
            'appointment_date' => '2023-03-21',
            'appointment_time' => '10:00:00',
        ]);
        \App\Models\Appointment::factory()->create([
            'appointment_id' => 'AP0003',
            'patient_id' => '4',
            'doctor_id' => '2',
            'schedule_id' => '1',
            'status' => 'Pending',
            'clinic_type' => 'Reservation',
            'appointment_date' => '2023-03-21',
            'appointment_time' => '11:00:00',
        ]);
    }
}