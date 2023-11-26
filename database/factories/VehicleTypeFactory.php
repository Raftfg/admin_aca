<?php

// VehicleTypeFactory.php

namespace Database\Factories;

use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleTypeFactory extends Factory
{
    protected $model = VehicleType::class;

    public function definition()
    {
        return [
            'type' => $this->faker->word,
            // Ajoutez d'autres colonnes si nécessaire
        ];
    }
}
