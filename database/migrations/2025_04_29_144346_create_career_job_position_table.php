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
        Schema::create('career_job_position', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_position_id')
                    ->constrained('job_positions_career')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('career_id')
                    ->constrained('careers')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_job_position');
    }
};
