<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\LogSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\VehicleSeeder;
use Database\Seeders\ImporterSeeder;
use Database\Seeders\ModeelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(ImporterSeeder::class);
        $this->call(LogSeeder::class);
        $this->call(ModeelSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
