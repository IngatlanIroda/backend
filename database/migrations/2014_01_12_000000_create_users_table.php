<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->date('szul_ido')->nullable();
            $table->foreignId('jogosultsag')
                ->references('j_id')
                ->on('jogosultsags')->default(1);
            $table->boolean('aktiv')->default(true);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            'name' => 'Alexa',
            'szul_ido' => '1998-03-12',
            'jogosultsag' => '1',

            'aktiv' => true,
            'email' => 'alexa@gmail.com',
            'password' => Hash::make('blabla'),

        ]);

        User::create([
            'name' => 'Bea',
            'szul_ido' => '1998-01-01',
            'jogosultsag' => '1',

            'aktiv' => true,
            'email' => 'teszt@gmail.com',
            'password' => Hash::make('blabla'),

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
