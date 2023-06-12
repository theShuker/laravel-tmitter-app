<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Tweet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Ivanov Ivan',
            'email' => 'user1@example.com',
        ]);

        User::factory()->create([
            'name' => 'Petrov Petr',
            'email' => 'user2@example.com',
        ]);

        Tweet::factory(5)->create();
    }
}
