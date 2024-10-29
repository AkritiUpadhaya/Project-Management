<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Task;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'hello',
            'email' => 'hello1@example.com',
            'password'=> bcrypt('123'),
            'email_verified_at'=>time()
        ]);
        Project::factory()
        ->count(20)
        ->hasTasks(20)
        ->create();
    }
}