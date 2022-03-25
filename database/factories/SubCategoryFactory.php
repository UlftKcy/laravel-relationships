<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sub_category_name = $this->faker->sentence(2);
        $category_id = $this->faker->numberBetween($min = 1, $max = 5);

        return [
            'name' => $sub_category_name,
            'category_id' => $category_id
        ];
    }
}
