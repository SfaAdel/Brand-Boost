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
            $table->string('h1')->unique();
            $table->string('h2')->unique();
            $table->string('p')->unique();
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
