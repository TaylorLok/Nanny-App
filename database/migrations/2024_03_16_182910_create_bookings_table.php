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
        Schema::create('bookings', function (Blueprint $table) {
            //booking_type_id, user_id, booking_date, booking_rate, start_time, end_time, duration, status(confirmed,pending,cancel), deleted_at,timestamps
            $table->id();
            $table->string('booking_type_id');
            $table->string('user_id');
            $table->date('booking_date');
            $table->decimal('booking_rate', 10, 2);
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('duration');
            $table->enum('status', ['confirmed', 'pending', 'cancel']);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
