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
        Schema::create('hero_section_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hero_section_id')->constrained('hero_sections')->onDelete('cascade');
            $table->string('locale');
            $table->string('h11')->nullable();
            $table->string('h21');
            $table->string('h12')->nullable();
            $table->string('h22');
            $table->string('h13')->nullable();
            $table->string('h23');
            $table->string('p')->nullable();
            $table->unique(['hero_section_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_section_translations');
    }
};
