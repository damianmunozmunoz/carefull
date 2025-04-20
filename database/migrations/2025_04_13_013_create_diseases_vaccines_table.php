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
        Schema::create('diseases_vaccines', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('disease_id');
            $table->unsignedBigInteger('vaccine_id');

            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
            $table->foreign('vaccine_id')->references('id')->on('vaccines')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diseases_vaccines');
    }
};
