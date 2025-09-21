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
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('plan')->nullable();
            $table->string('amount')->nullable();
            $table->enum('status', ['pending','successful', 'failed'])->default('pending');
            $table->string('minimum')->nullable();
            $table->string('maximum')->nullable();
            $table->string('interest')->nullable();
            $table->decimal('profit', 15, 2)->default(0.00);
            $table->timestamp('end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
