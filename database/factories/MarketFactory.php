<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Market>
 */
class MarketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker=Faker::create();
        $name=$faker->company;
        return [
            'name'=>$name,
            'address'=>$faker->address(),
            'value'=>$faker->randomFloat(2,1000,10000000),
            'employees_quantity'=>$faker->numberBetween(1,4),
            'occupancy_rate'=>$faker->randomFloat(2,1,100),
            'status'=>$faker->boolean()
        ];
    }
}
