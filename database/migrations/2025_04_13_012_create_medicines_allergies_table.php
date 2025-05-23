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
        Schema::create('medicines_allergies', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('medicine_id');
            $table->unsignedBigInteger('allergy_id');

            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->foreign('allergy_id')->references('id')->on('allergies')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines_allergies');
    }
};
