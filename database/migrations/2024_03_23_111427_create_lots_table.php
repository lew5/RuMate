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
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('starting_price');
            $table->enum('status', ['Open', 'Closed', 'Sold', 'Paused', 'Pending', 'Reserved', 'Cancelled'])->default('Open');
            $table->unsignedBigInteger('winner_user_id');
            $table->foreign('winner_customer_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lots');
    }
};
