<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromocionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promociones = [
            [
                'promocion' => 'Rios2023',
            ],
            [
                'promocion' => '1234',
            ],
            [
                'promocion' => '2222',
            ],
                                                            
        ];

        DB::table('promocion')->insert($promociones);
    }
}
