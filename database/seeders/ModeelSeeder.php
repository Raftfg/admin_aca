<?php

namespace Database\Seeders;

use App\Models\Modeel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModeelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Modeel::factory(3)->create();

        Modeel::create([
            'name' => 'Sedan',
        ]);
    }
}
