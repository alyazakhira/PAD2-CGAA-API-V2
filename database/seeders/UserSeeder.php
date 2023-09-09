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
            'name'          => 'Alya Zakhira',
            'gender'        => 'female',
            'date_of_birth' => '2002-12-24',
            'occupation'    => 'Penjelajah Alam',
            'institution'   => 'NASA',
            'email'         => 'zakhiralya@gmail.com',
            'password'      => Hash::make('12345'),
            'is_admin'      => true,
        ]);

        User::create([
            'name'          => 'Luthfia Nisa',
            'gender'        => 'female',
            'date_of_birth' => '2003-03-27',
            'occupation'    => 'Mahasiswa',
            'institution'   => 'Universitas Gadjah Mada',
            'study_program' => 'Software Engineering',
            'generation'    => 2021,
            'email'         => 'luthfianisa02@gmail.com',
            'password'      => Hash::make('12345'),
        ]);

        User::create([
            'name'          => 'Elyra Dina',
            'gender'        => 'female',
            'date_of_birth' => '2003-10-19',
            'occupation'    => 'Editor Handal',
            'institution'   => 'Akasa',
            'email'         => 'elyra.dina.oktaviani@gmail.com',
            'password'      => Hash::make('12345'),
        ]);
    }
}
