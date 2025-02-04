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
//        \App\Models\User::factory(30)->create();
         $this->call([
             CountriesTableSeeder::class,
             StatesTableSeeder::class,
             CitiesTableSeeder::class,
         ]);

    }
}
