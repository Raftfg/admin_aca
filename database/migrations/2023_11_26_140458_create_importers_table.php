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
        Schema::create('importers', function (Blueprint $table) {
            $table->id();
            $table->string('ifu_number')->nullable();
            $table->string('identity_card_number')->nullable();
            $table->string('identity_photo')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_number')->nullable();
            $table->string('company_address')->nullable();
            $table->string('importer_name')->nullable();
            $table->string('importer_number')->nullable();
            $table->string('importer_address')->nullable();
            $table->string('status')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('rccm_number')->nullable(); // Ajout du champ RCCM
            $table->string('website_url')->nullable(); // Ajout du champ URL du site web
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

              // Foreign key constraint
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('importers');
    }
};
