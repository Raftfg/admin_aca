<?php

// ImporterFactory.php

namespace Database\Factories;

use App\Models\Importer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImporterFactory extends Factory
{
    protected $model = Importer::class;

    public function definition()
    {
        return [
            'ifu_number' => $this->faker->unique()->randomNumber(6),
            'identity_card_number' => $this->faker->unique()->randomNumber(9),
            'identity_photo' => $this->faker->imageUrl(),
            'company_name' => $this->faker->company,
            'company_number' => $this->faker->unique()->randomNumber(8),
            'company_address' => $this->faker->address,
            'importer_name' => $this->faker->name,
            'importer_number' => $this->faker->unique()->randomNumber(9),
            'importer_address' => $this->faker->address,
            'status' => $this->faker->randomElement(['Actif', 'Inactif']),
            'whatsapp_number' => $this->faker->phoneNumber,
            'facebook_url' => $this->faker->url,
            'rccm_number' => $this->faker->unique()->randomNumber(8), // Ajout du numéro RCCM
            'website_url' => $this->faker->url, // Ajout de l'URL du site web
            'user_id' => $this->faker->numberBetween(1, 5), // Remplacez par l'ID d'un utilisateur existant
        ];
    }
}
