<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname'=>$this->faker->word,
            'mname'=>$this->faker->word,
            'lname'=>$this->faker->word,
            'phoneno'=>$this->faker->unique()->numberBetween(123455,4578389),
            'location'=>$this->faker->word,
            'gender'=>$this->faker->word,
            'annual_earning'=>$this->faker->unique()->numberBetween(10000,50000),
        ];
    }
}
