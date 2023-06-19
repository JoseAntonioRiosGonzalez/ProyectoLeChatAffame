<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = [
            [
                'nombre' => 'Usuario1',
                'email' => 'usuario1@example.com',
                'password' => Hash::make('contraseña1'),
                'telefono' => '1234567890',
            ],
            [
                'nombre' => 'Usuario2',
                'email' => 'usuario2@example.com',
                'password' => Hash::make('contraseña2'),
                'telefono' => '9876543210',
            ],
            [
                'nombre' => 'Usuario3',
                'email' => 'usuario3@example.com',
                'password' => Hash::make('contraseña3'),
                'telefono' => '5555555555',
            ],
            [
                'nombre' => 'Usuario4',
                'email' => 'usuario4@example.com',
                'password' => Hash::make('contraseña4'),
                'telefono' => '9999999999',
            ],
        ];

        DB::table('users')->insert($usuario);
    }
}
