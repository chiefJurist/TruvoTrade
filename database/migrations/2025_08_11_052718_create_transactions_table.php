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
            $table->id();
            // link to users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('type', 50);        // e.g. deposit, withdrawal, trade, etc.
            $table->string('blockchain', 50)->nullable();
            $table->string('status', 50);      // e.g. pending, success, failed
            $table->decimal('amount', 15, 2);  // money amount
            $table->string('from')->nullable(); // origin address / sender
            $table->string('to')->nullable();   // destination address / receiver
            $table->string('hash')->nullable(); // blockchain tx hash

            $table->timestamps(); // created_at, updated_at
            $table->index(['user_id', 'status']);
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
