<?php

// BrandFactory.php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company, // Vous pouvez utiliser le générateur de noms de sociétés
            // Ajoutez d'autres colonnes si nécessaire
        ];
    }
}
