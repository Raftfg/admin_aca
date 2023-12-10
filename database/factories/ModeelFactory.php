<?php

// VehicleTypeFactory.php

namespace Database\Factories;

use App\Models\Modeel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModeelFactory extends Factory
{
    protected $model = Modeel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            // Ajoutez d'autres colonnes si nécessaire
        ];
    }
}
