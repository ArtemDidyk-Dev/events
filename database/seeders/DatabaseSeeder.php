<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Role;
use App\Models\User;
use App\Models\Venue;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory()->admin()->create();
        Role::factory()->user()->create();
        User::factory()->admin()->create();
        Venue::factory(20)->create();
        Event::factory(50)->create();
    }
}
