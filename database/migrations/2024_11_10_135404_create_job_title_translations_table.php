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
        Schema::create('job_title_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_title_id')->constrained('job_titles')->onDelete('cascade');
            $table->string('locale');
            $table->string('name');
            $table->unique(['job_title_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_title_translations');
    }
};
