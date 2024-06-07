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
        Schema::create('simsession', function (Blueprint $table) {
            $table->id('sessionId');
            $table->foreignId('userId');
            $table->foreignId('roleId');
            $table->integer('profit');
            $table->integer('averageInteraction');
            $table->integer('averageReactionTime');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('last_edited')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simsession');
    }
};
