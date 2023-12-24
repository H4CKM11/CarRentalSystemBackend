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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customerID');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('streetAddress');
            $table->string('city');
            $table->string('state');
            $table->string('zipCode');
            $table->string('phoneNumber');
            $table->string('email')->unique();
            $table->string('licenseNumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
