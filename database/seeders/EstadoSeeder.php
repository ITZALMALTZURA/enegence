<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Services\CopomexService;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = new CopomexService();
        $estados = $service->getEstados();

        if (isset($estados['response']['estado'])) {
            foreach ($estados['response']['estado'] as $nombre) {
                DB::table('estados')->updateOrInsert(
                    ['nombre' => $nombre],
                    ['updated_at' => now(), 'created_at' => now()]
                );
            }
        }
    }
}
