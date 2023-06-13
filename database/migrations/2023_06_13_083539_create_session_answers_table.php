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
            $table->string('answer_1', 1)->nullable()->default(NULL);
            $table->string('answer_2', 1)->nullable()->default(NULL);
            $table->string('answer_3', 1)->nullable()->default(NULL);
            $table->string('answer_4', 1)->nullable()->default(NULL);
            $table->string('answer_5', 1)->nullable()->default(NULL);
            $table->string('answer_6', 1)->nullable()->default(NULL);
            $table->string('answer_7', 1)->nullable()->default(NULL);
            $table->string('answer_8', 1)->nullable()->default(NULL);
            $table->string('answer_9', 1)->nullable()->default(NULL);
            $table->string('answer_10', 1)->nullable()->default(NULL);
            $table->string('answer_11', 1)->nullable()->default(NULL);
            $table->string('answer_12', 1)->nullable()->default(NULL);
            $table->string('answer_13', 1)->nullable()->default(NULL);
            $table->string('answer_14', 1)->nullable()->default(NULL);
            $table->string('answer_15', 1)->nullable()->default(NULL);
            $table->string('answer_16', 1)->nullable()->default(NULL);
            $table->string('answer_17', 1)->nullable()->default(NULL);
            $table->string('answer_18', 1)->nullable()->default(NULL);
            $table->string('answer_19', 1)->nullable()->default(NULL);
            $table->string('answer_20', 1)->nullable()->default(NULL);
            $table->string('answer_21', 1)->nullable()->default(NULL);
            $table->string('answer_22', 1)->nullable()->default(NULL);
            $table->string('answer_23', 1)->nullable()->default(NULL);
            $table->string('answer_24', 1)->nullable()->default(NULL);
            $table->string('answer_25', 1)->nullable()->default(NULL);
            $table->string('answer_26', 1)->nullable()->default(NULL);
            $table->string('answer_27', 1)->nullable()->default(NULL);
            $table->string('answer_28', 1)->nullable()->default(NULL);
            $table->string('answer_29', 1)->nullable()->default(NULL);
            $table->string('answer_30', 1)->nullable()->default(NULL);
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
