<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlergiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alergias = [
            [
                'idRsv' => '1',
                'crustaceos' => '0',
                'gluten' => '0',
                'huevo' => '1',
                'lactosa' => '0',
                'vegano' => '0',
            ],
            [
                'idRsv' => '2',
                'crustaceos' => '0',
                'gluten' => '0',
                'huevo' => '0',
                'lactosa' => '0',
                'vegano' => '0',
            ],
            [
                'idRsv' => '3',
                'crustaceos' => '0',
                'gluten' => '0',
                'huevo' => '0',
                'lactosa' => '0',
                'vegano' => '0',
            ],
            [
                'idRsv' => '4',
                'crustaceos' => '1',
                'gluten' => '0',
                'huevo' => '0',
                'lactosa' => '0',
                'vegano' => '0',
            ],            
            [
                'idRsv' => '5',
                'crustaceos' => '0',
                'gluten' => '1',
                'huevo' => '1',
                'lactosa' => '1',
                'vegano' => '0',
            ],
            [
                'idRsv' => '6',
                'crustaceos' => '1',
                'gluten' => '0',
                'huevo' => '0',
                'lactosa' => '0',
                'vegano' => '1',
            ],
            [
                'idRsv' => '7',
                'crustaceos' => '0',
                'gluten' => '1',
                'huevo' => '0',
                'lactosa' => '0',
                'vegano' => '0',
            ],
                                                            
        ];

        DB::table('alergia')->insert($alergias);
    }
}
