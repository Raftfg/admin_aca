<?php

// LogFactory.php

namespace Database\Factories;

use App\Models\Log;
use Illuminate\Database\Eloquent\Factories\Factory;

class LogFactory extends Factory
{
    protected $model = Log::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5), // Remplacez par l'ID d'un utilisateur existant
            'action' => $this->faker->word,
            'request' => $this->faker->sentence,
            'ip_address' => $this->faker->ipv4,
        ];
    }
}
