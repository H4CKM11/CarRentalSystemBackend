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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id('rentalID');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->integer('totalCost');
            
            $table->unsignedBigInteger('customerID');
            $table->unsignedBigInteger('employeeID');
            $table->unsignedBigInteger('vehicleID');

            $table->foreign('customerID')->references('customerID')->on('customer');
            $table->foreign('employeeID')->references('employeeID')->on('employee');
            $table->foreign('vehicleID')->references('vehicleID')->on('vehicle');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
