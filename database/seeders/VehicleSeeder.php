<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Vehicle::factory(10)->create();

        Vehicle::create([
            'importer_id' => 1,
            'vehicle_type_id' => 1,
            'model' => 'Toyota Camry',
            'manufacturing_year' => 2022,
            'chassis_number' => '1HGCM82633A123456',
            'country_origin' => 'Japan',
            'document_cert' => 'XYZ123 Certificate',
            'price' => 25000.00,
            'condition' => 'New',
            'description' => 'A reliable and fuel-efficient sedan.',
            'name' => 'Toyota Camry 2022',
            'color' => 'Red',
            'status' => 'Active',
            'brand_id' => 1,
            'image_cover' => 'path/to/image.jpg',
            'transmission' => 'Automatic',
            'video_url' => 'https://www.youtube.com/watch?v=abcdef',
            'user_id' => 1,
        ]);
    }
}
