<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ReseñaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reseñas = [
            [
                'idUsu' => '1',
                'comentario' => 'Me ha gustado mucho este restuarante',
                'puntuacion' => '4',
                'fechaReseña' => date('Y-m-d'),
            ],
            [
                'idUsu' => '1',
                'comentario' => 'Fatal',
                'puntuacion' => '1',
                'fechaReseña' => date('Y-m-d'),
            ],
            [
                'idUsu' => '2',
                'comentario' => 'No volveria a ir',
                'puntuacion' => '3',
                'fechaReseña' => date('Y-m-d'),
            ],
            [
                'idUsu' => '3',
                'comentario' => 'Increible',
                'puntuacion' => '5',
                'fechaReseña' => date('Y-m-d'),
            ],
            [
                'idUsu' => '4',
                'comentario' => 'Espectacular. Sin palabras',
                'puntuacion' => '5',
                'fechaReseña' => date('Y-m-d'),
            ],
        ];

        DB::table('reseña')->insert($reseñas);
    }
}
