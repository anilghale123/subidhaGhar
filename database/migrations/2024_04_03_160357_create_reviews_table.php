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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('rating');
            $table->string('comment');

            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'fk_reviews_id'
            );

            $table->foreignId('s_id')->constrained(
                table: 'serviceproviders', indexName: 'fk_serviceprovider_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
