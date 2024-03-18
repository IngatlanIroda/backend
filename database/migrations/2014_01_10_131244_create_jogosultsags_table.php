<?php

use App\Models\Jogosultsag;
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
        Schema::create('jogosultsags', function (Blueprint $table) {
            $table->id('j_id');
            $table->string('j_megnevezes', 10);
            $table->timestamps();
        });
        Jogosultsag::create([
            'j_megnevezes'=>'user'
        ]);
        Jogosultsag::create([
            'j_megnevezes'=>'registered'
        ]);
        Jogosultsag::create([
            'j_megnevezes'=>'guest'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogosultsags');
    }
};
