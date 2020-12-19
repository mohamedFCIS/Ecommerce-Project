<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

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
            'name' => $this->faker->name(15),
            'meta_keywords' => $this->faker->word,
            'meta_des' => $this->faker->text(10),
            'price' => $this->faker->randomNumber,
            'details' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->image('public/storage', 640, 480, null, false),
            'cat_id' => $this->faker->randomNumber(1),

            // 'cat_id' => function () {
            //     return factory(App\Category::class)->create()->id;
            // },
        ];
    }
}
