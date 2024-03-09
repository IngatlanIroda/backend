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
        Schema::create('ingatlan_futes_tipuses', function (Blueprint $table) {
            $table->id('tipus_id');
            $table->string('tipus_megnevezes',50);
            $table->char('kategoria',5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlan_futes_tipuses');
    }
};
