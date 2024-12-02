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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profile_image')->nullable();
            $table->string('phone')->unique();
            $table->string('cash_number')->nullable();
            $table->boolean('active')->default(true);
            $table->enum('gender', ['male', 'female']);
            $table->boolean('fav')->default(false);
            $table->foreignId('job_title_id')->nullable()->constrained('job_titles')->onDelete('set null');
            $table->date('date_of_birth')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
