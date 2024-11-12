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
        Schema::create('freelancer_projects', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->foreignId('freelancer_service_id')->constrained('freelancer_services')->onDelete('cascade');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancer_projects');
    }
};
