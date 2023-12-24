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
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id('vehicleID');
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('color');
            $table->string('licensePlate');
            $table->string('status');

            $table->unsignedBigInteger('locationID');
            $table->foreign('locationID')->references('locationID')->on('location');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
