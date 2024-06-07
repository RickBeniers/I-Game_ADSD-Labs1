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
        Schema::create('stock', function (Blueprint $table) {
            $table->id('stockId');
            $table->foreignId('userId');
            $table->integer('amount');
            $table->integer('cost');
            $table->integer('round');
            $table->integer('bankAccount');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('last_edited')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
