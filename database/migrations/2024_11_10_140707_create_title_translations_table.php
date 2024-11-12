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
        Schema::create('title_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('title_id')->constrained('titles')->onDelete('cascade');
            $table->string('locale');
            $table->string('title')->unique();
            $table->string('short_description');
            $table->text('long_description')->nullable();
            $table->unique(['title_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('title_translations');
    }
};
