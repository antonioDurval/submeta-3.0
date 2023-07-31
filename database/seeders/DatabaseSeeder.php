<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TiposUser;
use App\Models\TipoUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $userAdmin = User::factory()->create([
            'email' => 'admin@email.com',
            'cpf'   => "49704272081",
            'rg'    => "173373148"
        ]);

        TipoUser::factory()->create([
            "nome" => "Administrador"
        ]);

        TipoUser::factory()->create([
            "nome" => "Proponente"
        ]);

        TipoUser::factory()->create([
            "nome" => "Gestor Institucional"
        ]);

        TipoUser::factory()->create([
            "nome" => "Avaliador Interno"
        ]);

        TipoUser::factory()->create([
            "nome" => "Avaliador Externo"
        ]);
        
        TipoUser::factory()->create([
            "nome" => "Integrante"
        ]);

        TiposUser::factory()->create([
            "users_id" => $userAdmin->id,
            "tipo_users_id" => 1
        ]);
    }
}
