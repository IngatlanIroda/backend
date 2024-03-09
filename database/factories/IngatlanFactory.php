<?php

namespace Database\Factories;

use App\Models\Ingatlan_futes_tipus;
use App\Models\Telepules;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingatlan>
 */
class IngatlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ing_tipus' => Ingatlan_futes_tipus::all()->random()->tipus_id,
            'futes_tipus' => Ingatlan_futes_tipus::all()->random()->tipus_id,
            'nagysag'=>rand(10,300),
            'szobaszam'=>rand(1,15),
            'telepules' => Telepules::all()->random()->telepules_id,
            'cim'=>fake('hu_HU')->address(),
            'leiras'=>fake('hu_HU')->paragraph()
        ];
    }
}
