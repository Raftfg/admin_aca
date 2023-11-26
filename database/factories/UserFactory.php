<?php

// UserFactory.php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Assurez-vous d'utiliser un mot de passe sécurisé
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'remember_token' => \Str::random(10),
        ];
    }
}
