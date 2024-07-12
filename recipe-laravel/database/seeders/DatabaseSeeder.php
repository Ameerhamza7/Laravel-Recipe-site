<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Recipe::create([
            'title' => 'Chicken Vegetabe Roast',
            'category' => 'Chicken',
            'ingredient' => 'Salt, Pepper, Redchilli, Yogurt,',
            'instruction' => 'Lorem ipsum'
        ]);

        Recipe::create([
            'title' => 'Beef Italian Stake',
            'category' => 'Beef',
            'ingredient' => 'Salt, Pudding, Yogurt,',
            'instruction' => 'Lorem ipsum2'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
