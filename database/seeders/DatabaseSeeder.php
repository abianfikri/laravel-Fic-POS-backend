<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin AAF',
            'email' => 'abian@fikri.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $this->call([
            CategorySeeder::class,
            // ProductSeeder::class,
        ]);
    }
}
