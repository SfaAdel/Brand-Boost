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
        Schema::create('field_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('field_id')->constrained('fields')->onDelete('cascade');
            $table->string('locale');
            $table->string('name');
            $table->unique(['field_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_translations');
    }
};
