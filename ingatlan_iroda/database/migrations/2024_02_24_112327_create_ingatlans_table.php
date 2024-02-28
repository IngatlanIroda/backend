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
        Schema::create('ingatlans', function (Blueprint $table) {
            $table->id('ing_id');
            $table
            ->foreignId('tipus')
            ->references('tipus_id')
            ->on('ingatlan_futes_tipuses');
           
            $table->integer('nagysag');
            $table->smallInteger('szobaszam');
            $table->boolean('erkely')->default(0);
            $table->boolean('terasz')->default(0);
            $table->boolean('kert')->default(0);
            $table
            ->foreignId('telepules_id')
            ->references('telepules_id')
            ->on('telepules');
            $table->string('cim',255);
            $table->text('leiras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlans');
    }
};
