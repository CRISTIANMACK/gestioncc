<?php

namespace Database\Seeders;

use App\Models\GeneroModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = new GeneroModel();

        $genero->genero="Masculino";

        $genero->save();

        $genero2 = new GeneroModel();
        $genero2->genero="Femenino";
        $genero2->save();
    }
}
