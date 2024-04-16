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
            'email' => 'admin@admin.com',
            'password' => '$2y$12$3EmMItTv5RmfpVHoSdaZbOSXm.HwJRNaqgLs4nzCo4KvYhFHHE3ky'
        ]);

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
