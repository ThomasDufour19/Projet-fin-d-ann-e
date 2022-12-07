<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(2)->create();
        \App\Models\Beast::factory(2)->create();
        \App\Models\Field::factory(2)->create();
        \App\Models\Cereal::factory(2)->make([
            'orge',
            'colza',
            'maïs'
        ]);
        \App\Models\Herd::factory(2)->create();
        \App\Models\Order::factory(2)->create();

        // \App\Models\Beast::factory(10)->create([
        //     'number' => '4',
        //     'birth' => false,
        //     'death' => true
        // ]);
    }
}
