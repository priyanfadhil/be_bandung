<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() //dummy data acak kalo pake ini
    {
        return [
            'name' => $this->faker->name, 
            'description'=> $this->faker->sentence(mt_rand(2,20)), 
            'address'=> $this->faker->address(),
            'time'=> $this->faker->time(),
            'phone'=> $this->faker->phoneNumber(),
            'background' => $this->faker->image('public/assets/images/wisata'),
            'facility' => $this->faker->time(),
        ];
    }
}
