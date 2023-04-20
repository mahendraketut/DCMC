<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'I Made Arya Wiguna',
        //     'username' => 'arya',
        //     'email' => 'administratoraccount@gmail.com',
        //     'gender' => 'male',
        //     'dob' => '2000-01-01',
        //     'phone' => '081234567890',
        //     'address' => 'Jl. Test',
        //     'city' => 'Test',
        //     'role' => 'administrator',
        //     'password' => bcrypt('1234512345'),
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'I Ketut Mahendra',
            'username' => 'mahendraketut',
            'email' => 'admin@gmail.com',
            'gender' => 'Male',
            'dob' => '2000-06-01',
            'phone' => '+6282147033064',
            'address' => 'Jl. Test A',
            'city' => 'Test',
            'role' => 'administrator',
            'password' => bcrypt('1234512345'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Allice Kennedy',
            'username' => 'allicekennedy',
            'email' => 'doctor@gmail.com',
            'gender' => 'Female',
            'dob' => '2000-06-01',
            'phone' => '+6282147033064',
            'address' => 'Jl. Test A',
            'city' => 'Test',
            'role' => 'doctor',
            'password' => bcrypt('doctor1234'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'justin murbey',
            'username' => 'justinmurbey',
            'email' => 'pharmacist@gmail.com',
            'gender' => 'Female',
            'dob' => '2000-06-01',
            'phone' => '+6282147033064',
            'address' => 'Jl. Test A',
            'city' => 'Test',
            'role' => 'pharmacist',
            'password' => bcrypt('pharmacist1234'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'andrew brew',
            'username' => 'andrewbrew',
            'email' => 'patient@gmail.com',
            'gender' => 'Female',
            'dob' => '2000-06-01',
            'phone' => '+6282147033064',
            'address' => 'Jl. Test A',
            'city' => 'Test',
            'role' => 'patient',
            'password' => bcrypt('patient1234'),
        ]);
    }
}
