<?php

namespace Database\Factories;

use App\Models\Ingatlan;
use App\Models\Ingatlan_futes_tipus;
use App\Models\Telepules;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingatlan>
 */
class IngatlanFactory extends Factory
{
    protected $model = Ingatlan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ingTipus = Ingatlan_futes_tipus::where('kategoria', 'i')->inRandomOrder()->first();
        $futesTipus = Ingatlan_futes_tipus::where('kategoria', 'f')->inRandomOrder()->first();

        return [
            'ing_tipus' => $ingTipus->tipus_id,
            'futes_tipus' => $futesTipus->tipus_id,
            'nagysag'=>rand(10,300),
            'szobaszam'=>rand(1,15),
            'telepules' => Telepules::all()->random()->telepules_id,
            'cim'=>fake('hu_HU')->address(),
            'leiras'=>fake('hu_HU')->paragraph(),
            'ugytipus' => '1',
            'user' => User::all()->random()->user_id,
            'hird_feladas_datuma'=>fake()->date(),
            'hird_lejarata' => fake()->date(),
            'utolso_modositas_datuma' => fake()->date(),
            'ar' => rand(10000000,90000000) 
        ];
        
    }



 

}
