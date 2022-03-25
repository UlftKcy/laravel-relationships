<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name = $this->faker->sentence(1);
        $sub_category_id = $this->faker->numberBetween($min = 1, $max = 10);

        return [
            'name' => $category_name,
            'description' => $this->faker->paragraph(2),
            'type' => $this->faker->sentence(1),
            'price' => mt_rand(10, 100) / 10,
            'quantity_in_stock' => mt_rand(10, 100) / 10,
            'sub_category_id' => $sub_category_id
        ];
    }
}
