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
            $table->unsignedBigInteger('quest_id_1')->foreign('quest_id_1')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_2')->foreign('quest_id_2')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_3')->foreign('quest_id_3')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_4')->foreign('quest_id_4')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_5')->foreign('quest_id_5')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_6')->foreign('quest_id_6')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_7')->foreign('quest_id_7')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_8')->foreign('quest_id_8')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_9')->foreign('quest_id_9')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_10')->foreign('quest_id_10')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_11')->foreign('quest_id_11')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_12')->foreign('quest_id_12')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_13')->foreign('quest_id_13')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_14')->foreign('quest_id_14')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_15')->foreign('quest_id_15')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_16')->foreign('quest_id_16')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_17')->foreign('quest_id_17')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_18')->foreign('quest_id_18')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_19')->foreign('quest_id_19')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_20')->foreign('quest_id_20')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_21')->foreign('quest_id_21')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_22')->foreign('quest_id_22')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_23')->foreign('quest_id_23')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_24')->foreign('quest_id_24')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_25')->foreign('quest_id_25')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_26')->foreign('quest_id_26')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_27')->foreign('quest_id_27')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_28')->foreign('quest_id_28')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_29')->foreign('quest_id_29')->references('id')->on('multiple_choices');
            $table->unsignedBigInteger('quest_id_30')->foreign('quest_id_30')->references('id')->on('multiple_choices');
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
