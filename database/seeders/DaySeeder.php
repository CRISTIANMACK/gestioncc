<?php

namespace Database\Seeders;

use App\Models\DayModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = ['Lunes','Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
        foreach ($d as $d1) {
            $day = new DayModel();
            $day->dia = $d1;
            $day->save();
        }
        
    }
}
