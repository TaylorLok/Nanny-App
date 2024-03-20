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
        Schema::create('profiles', function (Blueprint $table) {
            //user_id,user_type_id,country_id, firstname, surname, cellphone, email address
            //dob, gender, id_number/passport, address, postal_code, rate(Hourly,daily,weekly,month),deleted_at
            $table->id();
            $table->string('user_id');
            $table->string('user_type_id');
            $table->string('country_id');
            $table->string('firstname');
            $table->string('surname');
            $table->string('cellphone');
            $table->string('email');
            $table->date('dob');
            $table->string('gender');
            $table->string('id_number');
            $table->string('address');
            $table->string('postal_code')->nullable();
            $table->string('rate');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
