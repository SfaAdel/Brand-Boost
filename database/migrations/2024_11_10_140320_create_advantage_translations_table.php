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
        Schema::create('advantage_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('advantage_id')->constrained('advantages')->onDelete('cascade');
            $table->string('locale');
            $table->string('title');
            $table->text('description')->nullable();
            $table->unique(['advantage_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advantage_translations');
    }
};
