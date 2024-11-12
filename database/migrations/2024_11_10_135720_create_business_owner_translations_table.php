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
        Schema::create('business_owner_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_owner_id')->constrained('business_owners')->onDelete('cascade');
            $table->string('locale');
            $table->string('name');
            $table->string('company_name')->nullable();
            $table->unique(['business_owner_id', 'locale']);        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_owner_translations');
    }
};
