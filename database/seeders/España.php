<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspanaSeeder extends Seeder
{
    public function run()
    {
        DB::table('destinos')->insert([
            'nombre' => 'España',
            'descripcion' => 'Famosa por su diversidad cultural y geográfica, España ofrece todo, desde playas soleadas y montañas escarpadas hasta vibrantes ciudades y festivales coloridos. Las ciudades más populares incluyen Barcelona, conocida por su arquitectura modernista, y Madrid, la capital, famosa por su vida nocturna y sus museos de arte de clase mundial.',
            'duracion' => '10 días',
            'mejor_epoca' => 'Abril - Junio',
            'atracciones' => 'Barcelona, Madrid, Sevilla',
        ]);
    }
}