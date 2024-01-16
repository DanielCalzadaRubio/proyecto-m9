<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlemaniaSeeder extends Seeder
{
    public function run()
    {
        DB::table('destinos')->insert([
            'nombre' => 'Alemania',
            'descripcion' => 'Conocida por su eficiencia y su rica historia, Alemania ofrece una variedad de experiencias, desde explorar castillos antiguos y degustar cervezas locales hasta recorrer vibrantes ciudades modernas como Berlín y Múnich.',
            'duracion' => '7 días',
            'mejor_epoca' => 'Mayo - Septiembre',
            'atracciones' => 'Berlín, Múnich, Castillo de Neuschwanstein',
        ]);
    }
}