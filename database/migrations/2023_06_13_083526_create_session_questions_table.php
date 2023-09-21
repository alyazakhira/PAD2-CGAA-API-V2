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
        Schema::create('session_questions', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->foreign('id')->references('id')->on('sessions');
            for ($i=1; $i <= 60; $i++) {
                $table->unsignedBigInteger("mp_id_$i")->foreign("mp_id_$i")->references('id')->on('multiple_choices');
            }
            for ($i=1; $i <= 5; $i++) {
                $table->unsignedBigInteger("ey_id_$i")->foreign("ey_id_$i")->references('id')->on('essays');
            }
            $table->unsignedBigInteger("cs_id")->foreign("cs_id")->references('id')->on('case_studies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_questions');
    }
};
