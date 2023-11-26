<?php

namespace Database\Seeders;

use App\Models\Importer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImporterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Importer::factory(10)->create();

        Importer::create([
            'ifu_number' => 'ABC123',
            'identity_card_number' => '123456789',
            'identity_photo' => 'chemin/vers/photo.jpg',
            'company_name' => 'Importations XYZ SARL',
            'company_number' => '987654321',
            'company_address' => '123 Rue Principale, Ville',
            'importer_name' => 'Jean Dupont',
            'importer_number' => '987654321',
            'importer_address' => '456 Rue Secondaire, Ville',
            'status' => 'Actif',
            'whatsapp_number' => '123456789',
            'facebook_url' => 'https://www.facebook.com/importeurXYZ',
            'user_id' => 1,
        ]);
    }
}
