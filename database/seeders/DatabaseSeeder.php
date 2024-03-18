<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Telepules::factory(10)->create();
       //\App\Models\Ingatlan_futes_tipus::factory(10)->create();
        \App\Models\Ingatlan::factory(10)->create();
        \App\Models\Jogosultsag::factory(10)->create();
       \App\Models\User::factory(10)->create();
      
    } 
}
