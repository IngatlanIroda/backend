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
        Schema::create('preferencias', function (Blueprint $table) {
            $table->primary(['partner', 'tipus_id', 'telepules_id']);
            $table->foreignId('partner')->references('user_id')->on('users'); 
            $table->foreignId('tipus_id')->references('tipus_id')->on('ingatlan_futes_tipuses'); 
            $table->foreignId('telepules_id')->references('telepules_id')->on('telepules'); 
            $table->boolean('hirlevel')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferencias');
    }
};
