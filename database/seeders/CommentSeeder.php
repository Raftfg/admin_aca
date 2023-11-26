<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Comment::factory(15)->create();
        Comment::create([
            'user_name' => 'John Doe',
            'message' => 'Excellent véhicule, très satisfait de mon achat!',
            'rating_number' => 5,
            'vehicle_id' => 1, // Remplacez par l'ID du véhicule auquel ce commentaire est associé
        ]);
    }
}
