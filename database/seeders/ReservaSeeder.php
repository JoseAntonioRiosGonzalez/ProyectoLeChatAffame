<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservas = [
            [
                'idUsu' => '1',
                'fechaReserva' => '2023-06-22',
                'numeroMesa' => '4',
            ],
            [
                'idUsu' => '3',
                'fechaReserva' => '2023-06-25',
                'numeroMesa' => '12',
            ],
            [
                'idUsu' => '2',
                'fechaReserva' => '2023-06-20',
                'numeroMesa' => '7',
            ],
            [
                'idUsu' => '4',
                'fechaReserva' => '2023-06-24',
                'numeroMesa' => '19',
            ],
            [
                'idUsu' => '1',
                'fechaReserva' => '2023-06-23',
                'numeroMesa' => '3',
            ],
            [
                'idUsu' => '2',
                'fechaReserva' => '2023-06-21',
                'numeroMesa' => '15',
            ],
            [
                'idUsu' => '3',
                'fechaReserva' => '2023-06-22',
                'numeroMesa' => '24',
            ],
                                                            
        ];

        DB::table('reserva')->insert($reservas);
    }
}
