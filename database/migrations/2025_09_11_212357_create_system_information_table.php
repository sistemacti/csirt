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
        Schema::create('system_information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo1')->nullable();
            $table->string('logo2')->nullable();
            $table->string('logo3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_information');
    }
};
