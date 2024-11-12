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
        Schema::create('favorite_freelancers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id')->constrained('freelancers')->onDelete('cascade');
            $table->foreignId('business_owner_id')->constrained('business_owners')->onDelete('cascade');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite_freelancers');
    }
};
