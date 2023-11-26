<?php

// ImageFactory.php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        return [
            'vehicle_id' => $this->faker->numberBetween(1, 10), // Remplacez par l'ID d'un véhicule existant
            'url' => $this->faker->imageUrl(),
            // Ajoutez d'autres colonnes si nécessaire
        ];
    }
}
