<?php

use App\Models\Telepules;
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
        Schema::create('telepules', function (Blueprint $table) {
            $table->id('telepules_id');
            $table->string('telepules_megnevezes',60);
            $table->timestamps();
        });


        //1
        Telepules::create([
            'telepules_megnevezes'=>'Budapest',
        ]);

        //2
        Telepules::create([
            'telepules_megnevezes'=>'Szentendre',
        ]);

        //3
        Telepules::create([
            'telepules_megnevezes'=>'Miskolc',
        ]);

        //4
        Telepules::create([
            'telepules_megnevezes'=>'Sopron',
        ]);

        //5
        Telepules::create([
        'telepules_megnevezes'=>'Zalaegerszeg',
        ]);

        //6
        Telepules::create([
        'telepules_megnevezes'=>'Szeged',
        ]);



    }

    /**
     * Reverse the migrations.
     */



     
    public function down(): void
    {
        Schema::dropIfExists('telepules');
    }
};
