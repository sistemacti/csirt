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
        Schema::create('incident_reports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('state',100);
            $table->string('phone',13);
            $table->string('entity',200);
            $table->unsignedBigInteger('entity_type_id');
            $table->date('detection_date');
            $table->time('detection_time');
            $table->string('objetive_host');
            $table->string('origin_host');
            $table->string('description');
            $table->string('assessment',50);
            $table->string('evident');
            $table->unsignedBigInteger('affected_service_id');
            $table->unsignedBigInteger('affected_infrastructure_id');
            $table->foreign('entity_type_id')
            ->references('id')
            ->on('entity_types')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $table->foreign('affected_service_id')
            ->references('id')
            ->on('affected_services')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $table->foreign('affected_infrastructure_id')
            ->references('id')
            ->on('affected_infrastructures')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incident_reports');
    }
};
