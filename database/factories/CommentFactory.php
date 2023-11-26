<?php

// CommentFactory.php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_name' => $this->faker->name,
            'message' => $this->faker->sentence,
            'rating_number' => $this->faker->numberBetween(1, 5),
            'vehicle_id' => $this->faker->numberBetween(1, 10), // Remplacez par l'ID du véhicule auquel ce commentaire est associé
        ];
    }
}
