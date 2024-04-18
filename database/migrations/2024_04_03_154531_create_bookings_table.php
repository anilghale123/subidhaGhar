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
            $table->id();
            $table->timestamps();
            $table->date('booking_date');
            $table->char('status',20);
            $table->char('address',30)->nullable();


            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'fk_bookings_users_id'
            );

            $table->foreignId('s_id')->constrained(
                table: 'serviceproviders', indexName: 'fk_bookings_serviceproviders_id'
            );
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
