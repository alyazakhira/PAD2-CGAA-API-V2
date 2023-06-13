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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender',10);
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('occupation');
            $table->string('study_program')->nullable()->default(NULL);
            $table->string('institution');
            $table->integer('generation')->unsigned()->nullable()->default(NULL);
            $table->boolean('is_admin')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
