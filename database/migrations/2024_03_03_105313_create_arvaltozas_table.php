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
        Schema::create('arvaltozas', function (Blueprint $table) {
            $table->primary(['ing_id', 'meddig']);
            $table->foreignId('ing_id')->references('ing_id')->on('ingatlans'); 
            $table->date('meddig');
            $table->integer('regi_ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arvaltozas');
    }
};
