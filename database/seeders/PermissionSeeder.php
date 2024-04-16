<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'view users','guard_name' => 'web']);
        Permission::create(['name' => 'create users','guard_name' => 'web']);
        Permission::create(['name' => 'edit users','guard_name' => 'web']);
        Permission::create(['name' => 'delete users','guard_name' => 'web']);
    }
}
