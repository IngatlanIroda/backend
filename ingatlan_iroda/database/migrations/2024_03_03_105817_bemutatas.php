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
        Schema::create('bemutatas', function (Blueprint $table) {
            $table->primary(['ing_id', 'bemutatas_datuma']);
            $table->foreignId('ing_id')->references('ing_id')->on('ingatlans'); 
            $table->date('bemutatas_datuma'); 
            $table->foreignId('partner')->references('user_id')->on('users'); 
            $table->foreignId('dolgozo')->references('user_id')->on('users'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
