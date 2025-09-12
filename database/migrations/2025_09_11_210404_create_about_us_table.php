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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('mission_icon')->nullable();
            $table->text('mission')->nullable();
            $table->string('vision_icon')->nullable();
            $table->text('vision')->nullable();
            $table->string('icon_values')->nullable();
            $table->json('values')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
