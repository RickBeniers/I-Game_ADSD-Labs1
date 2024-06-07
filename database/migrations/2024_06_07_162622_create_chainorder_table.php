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
        Schema::create('chainorder', function (Blueprint $table) {
            $table->id('chainOrderId');
            $table->foreignId('sessionId');
            $table->integer('order');
            $table->integer('round');
            $table->integer('cost');
            $table->integer('totalProfit');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('last_edited')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chainorder');
    }
};
