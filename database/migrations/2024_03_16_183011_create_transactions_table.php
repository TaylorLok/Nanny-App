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
        Schema::create('transactions', function (Blueprint $table) {
            //booking_id, user_id, amount, status, deleted_at,timestamps
            $table->id();
            $table->string('booking_id');
            $table->string('user_id');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['success', 'pending', 'cancel']);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
