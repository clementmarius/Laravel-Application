<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@user.com',
            'password' => bcrypt('Secret1*3*5*')
        ]);

        $this->call([
            RoleSeeder::class,
        ]);
    }
}
