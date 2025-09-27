<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CopomexService;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = DB::table('estados')->get();
        return view('estados.index', compact('estados'));
    }

    public function municipios($estado)
    {
        $service = new CopomexService();
        $data = $service->getMunicipios($estado);

        $municipios = $data['response']['municipios'] ?? [];
        return view('estados.municipios', compact('estado', 'municipios'));
    }
}
