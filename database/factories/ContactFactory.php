<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
// generate 3 random colors
        $faker = $this->faker;
            $colors = collect(range(1, 3))->map(function() use ($faker) {
                return $faker->colorName;
            })->toArray();
            return [
                'name' => $faker->name,
                'phone' => $faker->e164PhoneNumber,
                'address' => $faker->address,
                'favorites' => ['colors' => $colors],
            ];

    }
}
