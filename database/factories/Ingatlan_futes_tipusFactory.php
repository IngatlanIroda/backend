<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingatlan_futes_tipus>
 */
class Ingatlan_futes_tipusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      
            return [
           
                'tipus_megnevezes' => fake('hu_HU')->text(50),
                'kategoria'=>fake()->text(5)
            ];
       
    }
}
