<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
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
        $continents = [
            ['id' => 1, 'name' => 'Asia'],
            ['id' => 2, 'name' => 'Africa'],
            ['id' => 3, 'name' => 'Europe'],
            ['id' => 4, 'name' => 'North America'],
            ['id' => 5, 'name' => 'South America'],
            ['id' => 6, 'name' => 'Australia/Oceania'],
            ['id' => 7, 'name' => 'Antarctica'],
        ];

        foreach ($continents as $continent) {
            Continent::factory()
                ->has(Country::factory()->count(10))
                ->create($continent);
        }

        Product::factory()->count(100)->create();
    }
}
