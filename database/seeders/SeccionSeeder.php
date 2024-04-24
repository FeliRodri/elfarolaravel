<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $secciones = ['DEPORTES', 'DOCUMENTALES', 'NEGOCIOS', 'POLITICA', 'SALUD&BIENESTAR', 'ULTIMASNOTICIAS'];

        foreach ($secciones as $seccion) {
            DB::table('secciones')->insert([
                'categoriaNoticia' => $seccion
            ]);
        }
    }
}