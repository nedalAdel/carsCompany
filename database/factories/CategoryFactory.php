<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker()->word,
            'descrpion'=>$this->faker()->sentence(10),
            'status'=>$this->faker()->boolean(40)

            //
        ];
    }
}
