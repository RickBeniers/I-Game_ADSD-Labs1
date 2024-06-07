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
        Schema::create('incomingorders', function (Blueprint $table) {
            $table->id('órderInId');
            $table->foreignId('userId');
            $table->integer('order');
            $table->integer('cost');
            $table->integer('isDelivered');
            $table->integer('round');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('last_edited')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomingorders');
    }
};
