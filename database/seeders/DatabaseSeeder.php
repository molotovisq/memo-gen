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
        \App\Models\State::factory(1)->create();
        \App\Models\City::factory(1)->create();
        \App\Models\Client::factory(20)->create();
    }
}
