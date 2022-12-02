<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Horarios;

class HorariosTableSeeder extends Seeder
{
    public function run(){
        for ($i=0; $i<7; ++$i) {
            Horarios::create([
                'day' => $i,
                'active' => ($i==3), // Thursday
                
                'morning_start' => ($i==3 ? '07:00:00' : '05:00:00'),
                'morning_end' => ($i==3 ? '09:30:00' : '05:00:00'),

                'afternoon_start' => ($i==3 ? '15:00:00' : '13:00:00'),
                'afternoon_end' => ($i==3 ? '18:00:00' : '13:00:00'),

                'user_id' => 3 // Médico Test (UsersTableSeeder)
            ]);
        }
    }
}
