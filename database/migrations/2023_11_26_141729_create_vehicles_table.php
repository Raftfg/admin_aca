<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('importer_id');
            $table->unsignedBigInteger('vehicle_type_id');
            $table->string('model');
            $table->integer('manufacturing_year');
            $table->string('chassis_number');
            $table->string('country_origin');
            $table->string('document_cert');
            $table->decimal('price', 10, 2);
            $table->string('condition');
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('color')->nullable();
            $table->string('status');
            $table->unsignedBigInteger('brand_id');
            $table->string('image_cover')->nullable();
            $table->string('transmission')->nullable();
            $table->string('video_url')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('importer_id')->references('id')->on('importers')->onDelete('cascade');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
