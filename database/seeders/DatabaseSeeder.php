<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
         \App\Models\ItemCategory::factory(10)->create();
          \App\Models\Item::factory(30)->create();
          \App\Models\ItemPhoto::factory(100)->create();
    }
}
