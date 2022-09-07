<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Car::class;

    
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->Car()
        ];
    }
}
