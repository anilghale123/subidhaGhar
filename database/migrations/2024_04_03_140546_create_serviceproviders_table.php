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
        Schema::create('serviceproviders', function (Blueprint $table) 
        {
            $table->id();
    $table->timestamps();
    $table->char('name',30);
    $table->unsignedBigInteger('phone_no');
    $table->char('address',30);
    $table->integer('exp_year');
    $table->char('category',30);
    $table->integer('price');
    $table->char('status',20);

    $table->foreignId('c_id')->constrained
    (
        table: 'categories', indexName: 'id'
    );
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serviceproviders');
    }
    
};
