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
        Schema::create('freelancer_project_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_project_id')->constrained('freelancer_projects')->onDelete('cascade');
            $table->string('locale');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->unique(['freelancer_project_id', 'locale'], 'freelancer_proj_id_locale_unique');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancer_project_translations');
    }
};
