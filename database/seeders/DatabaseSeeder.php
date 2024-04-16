<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'admin',
            'email' => 'admin@user.com',
            'password' => bcrypt('Secret1*3*5*')
        ]);

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
