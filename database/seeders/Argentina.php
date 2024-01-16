<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArgentinaSeeder extends Seeder
{
    public function run()
    {
        DB::table('destinos')->insert([
            'nombre' => 'Argentina',
            'descripcion' => 'Argentina es conocida por su apasionante cultura del tango, su sabrosa carne de res y su amor por el fútbol. El país cuenta con una variedad de paisajes, desde las cataratas del Iguazú en el norte hasta los glaciares de la Patagonia en el sur.',
            'duracion' => '14 días',
            'mejor_epoca' => 'Octubre - Abril',
            'atracciones' => 'Buenos Aires, Cataratas del Iguazú, Glaciar Perito Moreno',
        ]);
    }
}