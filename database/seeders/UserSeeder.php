<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'          => 'Admin CGAA',
            'gender'        => 'male',
            'date_of_birth' => '2003-01-01',
            'occupation'    => 'Admin',
            'institution'   => 'Universitas Gadjah Mada',
            'email'         => 'simulasi-cgaa@hotmail.com',
            'password'      => Hash::make('.eL!D;oK8r)D'),
            'is_admin'      => true,
        ]);

        User::create([
            'name'          => 'Tester',
            'gender'        => 'female',
            'date_of_birth' => '2003-01-01',
            'occupation'    => 'Mahasiswa',
            'institution'   => 'Universitas Gadjah Mada',
            'study_program' => 'Software Engineering',
            'generation'    => 2021,
            'email'         => 'elyra.dina.oktaviani@gmail.com',
            'password'      => Hash::make('+d4nK~3p+b=m'),
        ]);
    }
}
