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
        Schema::create('sessions', function (Blueprint $table) {
            $table->foreignId('sessionId');
            $table->integer('code');
            $table->integer('totalRounds');
            $table->integer('role_1_isActive');
            $table->integer('role_2_isActive');
            $table->integer('role_3_isActive');
            $table->integer('role_4_isActive');
            $table->timestamp('hasStarted')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('last_edited')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
