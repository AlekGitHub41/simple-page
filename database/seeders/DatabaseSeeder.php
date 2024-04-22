<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $first_items = ["Все туры", "Отзывы", "Контакты"];
        foreach ($first_items as $item) {
            \App\Models\MenuItems::factory()->create(["menu_item" => $item]);
        }
        $test = \App\Models\MenuItems::factory(10)->create();
    }
}
