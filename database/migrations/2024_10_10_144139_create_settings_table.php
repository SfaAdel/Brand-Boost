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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            // $table->string('name')->unique();
            $table->string('logo')->unique();
            $table->string('favicon')->unique();
            $table->string('phone')->unique();
            // $table->string('address')->unique();
            $table->string('whatsapp')->unique();
            $table->string('email')->unique();
            $table->string('facebook')->unique();
            $table->string('x')->unique();
            $table->string('tiktok')->unique();
            $table->string('youtube')->unique();
            $table->string('instagram')->unique();
            $table->string('linkedin')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
