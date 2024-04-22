<?php

namespace Database\Factories;

use App\Models\MenuItems;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItems>
 */
class MenuItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = MenuItems::class;


    public function definition(): array
    {
        return [
            "menu_item"=>$this->faker->word,
        ];
    }
}
