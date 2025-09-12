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
        Schema::create('active_modules', function (Blueprint $table) {
            $table->id();
            $table->boolean('navbar')->default(1);
            $table->boolean('header')->default(1);
            $table->boolean('about_us')->default(1);
            $table->boolean('services')->default(1);
            $table->boolean('resource_alerts')->default(1);
            $table->boolean('incidents')->default(1);
            $table->boolean('questions')->default(1);
            $table->boolean('terms')->default(1);
            $table->boolean('policies')->default(1);
            $table->boolean('normatives')->default(1);
            $table->boolean('contact')->default(1);
            $table->boolean('footer')->default(1);
            $table->boolean('newsletters')->default(1);
            $table->boolean('resources')->default(1);
            $table->boolean('incident_reports')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('active_modules');
    }
};
