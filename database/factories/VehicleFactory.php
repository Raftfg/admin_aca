<?php

// VehicleFactory.php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            'importer_id' => $this->faker->numberBetween(1, 10), // Remplacez par l'ID d'un importateur existant
            'model_id' => $this->faker->numberBetween(1, 3), // Remplacez par l'ID d'un type de véhicule existant
            // 'model' => $this->faker->word,
            'manufacturing_year' => $this->faker->year,
            'chassis_number' => $this->faker->unique()->uuid,
            // 'country_origin' => $this->faker->country,
            'document_cert' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1000, 50000),
            'condition' => $this->faker->randomElement(['Nouveau', 'Occasion']),
            'description' => $this->faker->sentence,
            'name' => $this->faker->word,
            'color' => $this->faker->colorName,
            'status' => $this->faker->randomElement(['Actif', 'Inactif']),
            'brand_id' => $this->faker->numberBetween(1, 5), // Remplacez par l'ID d'une marque existante
            'countrie_id' => $this->faker->numberBetween(1, 5), // Remplacez par l'ID d'une marque existante
            'image_cover' => $this->faker->imageUrl(),
            'transmission' => $this->faker->randomElement(['Automatique', 'Manuelle']),
            'video_url' => $this->faker->url,
            'user_id' => $this->faker->numberBetween(1, 5), // Remplacez par l'ID d'un utilisateur existant
        ];
    }
}
