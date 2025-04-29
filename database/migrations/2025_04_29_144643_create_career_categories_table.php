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
        Schema::create('career_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                    ->constrained('category_careers')
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
        Schema::dropIfExists('career_categories');
    }
};
