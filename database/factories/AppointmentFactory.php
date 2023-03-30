<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'appointment_id' => $this->faker->unique()->word,
            'patient_id' => \App\Models\User::factory(),
            'doctor_id' => \App\Models\User::factory(),
            'schedule_id' => \App\Models\Schedule::factory(),
            'status' => $this->faker->randomElement(['Pending', 'Approved', 'Rejected', 'Cancelled', 'Completed']),
            'clinic_type' => $this->faker->randomElement(['Reservation', 'Emergency']),
            'appointment_time' => $this->faker->time(),
        ];
    }
}
