<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UruguaySeeder extends Seeder
{
    public function run()
    {
        DB::table('destinos')->insert([
            'nombre' => 'Uruguay',
            'descripcion' => 'A menudo eclipsado por sus vecinos más grandes, Argentina y Brasil, Uruguay es un destino turístico en crecimiento conocido por su tranquila costa, su animada capital, Montevideo, y su próspera escena vinícola.',
            'duracion' => '5 días',
            'mejor_epoca' => 'Diciembre - Marzo',
            'atracciones' => 'Montevideo, Punta del Este, Colonia del Sacramento',
        ]);
    }
}

