<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // Keep created_at and updated_at

            // Fields from your form 
            $table->date('date'); 
            $table->time('time');
            $table->string('phone_number'); 
            $table->string('location'); 
            $table->text('notes')->nullable(); 

            // State of the Booking
            $table->string('status')->default('pending'); 

            // Foreign Keys (with your custom constraints)
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'fk_bookings_users_id'
            );
    
            $table->foreignId('s_id')->constrained(
                table: 'serviceproviders', indexName: 'fk_bookings_serviceproviders_id'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
