<?php

namespace Database\Seeders;

use App\Models\Log;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Log::factory(10)->create();

        Log::create([
            'user_id' => 1,
            'action' => 'Connexion',
            'request' => 'Tentative de connexion réussie',
            'ip_address' => '203.0.113.1', // Remplacez cela par l'adresse IP réelle
        ]);
    }
}
