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
        Schema::create('hirdetes', function (Blueprint $table) {
            $table->id('hirdetes_id');
            $table->foreignId('ingatlan')->references('ing_id')->on('ingatlans'); 
            $table->string('ugytipus', 1);
            $table->foreignId('user')->references('user_id')->on('users'); 
            $table->date('hird_feladas_datuma');
            $table->date('hird_lejarata');
            $table->date('utolso_modositas_datuma');
            $table->integer('ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hirdetes');
    }
};
