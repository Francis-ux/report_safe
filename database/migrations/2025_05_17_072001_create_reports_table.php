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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            // Reporter (optional)
            $table->boolean('anonymous')->default(true);
            $table->string('reporter_name')->nullable();
            $table->string('reporter_email')->nullable();
            $table->string('reporter_phone')->nullable();
            // Victim
            $table->string('victim_name');
            $table->integer('victim_age');
            $table->text('victim_address');
            // Abuse Info
            $table->string('abuse_type');
            $table->longText('incident_description');
            $table->dateTime('datetime')->nullable();
            $table->string('evidence')->nullable(); // File path
            $table->string('status')->default('Open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
