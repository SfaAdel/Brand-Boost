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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_service_id')->nullable()->constrained('freelancer_services')->onDelete('set null');
            $table->foreignId('business_owner_id')->constrained('business_owners')->onDelete('cascade');
            $table->text('description');
            $table->date('expected_receive_date');
            $table->decimal('amount', 10, 2);
            $table->decimal('total_price', 10, 2)->default(0);
            $table->boolean('open')->default(false);
            $table->enum('status', ['complete', 'pending'])->default('pending');
            $table->enum('payment_status', ['complete', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
