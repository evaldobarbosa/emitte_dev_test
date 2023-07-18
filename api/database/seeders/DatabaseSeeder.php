<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Emitte user',
            'email' => 'emitte@emitte.com.br',
            'password' => bcrypt('emitte2023'),
        ]);

        \DB::table('empresas')->insert([
            'razao_social' => 'Emitte',
            'cnpj' => '11111111000101',
        ]);

        \DB::table('empresa_usuarios')->insert([
            'user_id' => '1',
            'empresa_id' => '1',
        ]);
    }
}
