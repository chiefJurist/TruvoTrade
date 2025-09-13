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
            $table->string('blockchain', 50);        // e.g. Bitcoin, Ethereum, Solana
             $table->enum('status', ['pending','successful', 'failed'])->default('pending');
            $table->decimal('amount', 15, 2);
            $table->string('from'); // sender wallet / address or ref
            $table->string('to');
            $table->string('hash'); // blockchain tx hash
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
