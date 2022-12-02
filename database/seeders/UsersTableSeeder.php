<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name' => 'Cristian',
            'email' => 'cristiandany@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'cedula' => '0412312456',
            'address' => 'av. galvz',
            'phone' => '094651321',
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Paciente1',
            'email' => 'paciente1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'role' => 'paciente',
        ]);
        User::create([
            'name' => 'medico 1',
            'email' => 'medico1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'role' => 'doctor',
        ]);

        User::factory()
            ->count(50)
            ->state(['role' => 'patiente'])
            ->create();
    }
}
