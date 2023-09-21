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
        Schema::create('session_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->foreign('id')->references('id')->on('sessions');
            for ($i=1; $i <= 60; $i++) {
                $table->string("mp_answer_$i", 1)->nullable()->default(NULL);
            }
            for ($i=1; $i <= 5; $i++) {
                $table->text("ey_answer_$i")->nullable()->default(NULL);
            }
            for ($i=1; $i <= 10; $i++) {
                $table->text("cs_answer_$i")->nullable()->default(NULL);
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_answers');
    }
};
