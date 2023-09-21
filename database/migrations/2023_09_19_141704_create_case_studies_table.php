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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('question_type', 6);
            $table->tinyInteger('instruction_count');
            $table->text('information');
            for ($i=1; $i <= 10; $i++) {
                $table->text("instruction_$i")->nullable()->default(NULL);
                $table->text("key_answer_$i")->nullable()->default(NULL);
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
