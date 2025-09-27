<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CopomexService
{
    protected $baseUrl = "https://api.copomex.com/query";
    protected $token = "pruebas"; // usa tu token real si lo tienes

    public function getEstados()
    {
        $response = Http::get("{$this->baseUrl}/get_estados", [
            "token" => $this->token
        ]);

        return $response->json();
    }

    public function getMunicipios($estado)
    {
        $response = Http::get("{$this->baseUrl}/get_municipio_por_estado/{$estado}", [
            "token" => $this->token
        ]);

        return $response->json();
    }
}
