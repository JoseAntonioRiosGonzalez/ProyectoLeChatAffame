<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(ReseñaSeeder::class);    
        $this->call(ReservaSeeder::class);    
        $this->call(AlergiaSeeder::class);    
        $this->call(PromocionSeeder::class);    
    }
}
