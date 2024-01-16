<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JaponSeeder extends Seeder
{
    public function run()
    {
        DB::table('destinos')->insert([
            'nombre' => 'Japón',
            'descripcion' => 'Japón es conocido por su rica cultura y tecnología avanzada. Desde los templos históricos y los hermosos cerezos en flor hasta los rascacielos modernos y la electrónica de vanguardia, Japón ofrece una mezcla única de lo antiguo y lo nuevo.',
            'duracion' => '14 días',
            'mejor_epoca' => 'Marzo - Mayo',
            'atracciones' => 'Tokio, Kioto, Hiroshima',
        ]);
    }
}