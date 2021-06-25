<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => ucwords($this->faker->words(2, true)),
            'description' => $this->faker->paragraph(3),
            'quantity' => $this->faker->numberBetween(0, 20),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 30, $max = 200),
            'image'=> 'https://source.unsplash.com/random',
        ];
    }
}
