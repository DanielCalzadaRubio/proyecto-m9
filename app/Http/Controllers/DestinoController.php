<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinoController extends Controller
{
    public function index()
    {
        $destinos = DB::table('destinos')
            ->whereIn('nombre', ['Alemania', 'Argentina', 'España', 'Japón', 'Perú', 'Uruguay'])
            ->get();


        return view('destinos', ['destinos' => $destinos]);
    }
}
