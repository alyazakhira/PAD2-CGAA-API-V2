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
        Schema::create('exam_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->foreign('user_id')->references('id')->on('users');
            $table->string('type',6);
            $table->tinyInteger('mp_score')->default(0);
            $table->tinyInteger('mp_correct')->default(0);
            $table->tinyInteger('mp_wrong')->default(0);
            $table->tinyInteger('ey_answered')->default(0);
            $table->tinyInteger('cs_answered')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_sessions');
    }
};
