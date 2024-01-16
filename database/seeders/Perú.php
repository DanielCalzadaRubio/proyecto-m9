<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeruSeeder extends Seeder
{
    public function run()
    {
        DB::table('destinos')->insert([
            'nombre' => 'Perú',
            'descripcion' => 'Conocido por su rica historia y cultura, Perú es famoso por sus sitios arqueológicos, incluyendo Machu Picchu, una antigua ciudad inca en la Cordillera de los Andes. La capital, Lima, alberga el Museo Larco, que alberga una colección de arte precolombino.',
            'duracion' => '7 días',
            'mejor_epoca' => 'Mayo - Septiembre',
            'atracciones' => 'Machu Picchu, Cusco, Lago Titicaca',
        ]);
    }
}
