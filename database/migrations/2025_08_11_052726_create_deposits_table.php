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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            // link to users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('type', 50);        // e.g. Bitcoin, Ethereum, Solana
            $table->string('status', 50);      // e.g. pending, completed, failed
            $table->decimal('amount', 15, 2);
            $table->string('from')->nullable(); // sender wallet / address or ref
            $table->string('hash')->nullable(); // blockchain tx hash
            $table->timestamp('date')->nullable();

            $table->timestamps();
            $table->index(['user_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
