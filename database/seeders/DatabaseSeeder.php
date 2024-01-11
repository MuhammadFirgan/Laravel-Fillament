<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'test',
        //     'email' => 'test@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);
        Category::insert([
            [
                'name' => 'Cappuccino',
                'slug' => 'cappuccino'
            ],
            [
                'name' => 'Espresso',
                'slug' => 'espresso'
            ],
            [
                'name' => 'Americano',
                'slug' => 'americano'
            ],
            [
                'name' => 'Latte',
                'slug' => 'latte'
            ],
            [
                'name' => 'Black Coffee',
                'slug' => 'black-coffee'
            ],
        ]);

    }
}
