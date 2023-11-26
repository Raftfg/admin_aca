<?php

// CountryFactory.php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        return [
            'name' => $this->faker->country, // Vous pouvez utiliser le générateur de noms de pays
            'language' => $this->faker->languageCode,
            // Ajoutez d'autres colonnes si nécessaire
        ];
    }
}
