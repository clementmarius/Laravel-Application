<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin','guard_name' => 'web']);
        $adminRole->givePermissionTo(Permission::all());
        $userRole = Role::create(['name' => 'customer','guard_name' => 'web']);

//        $adminRole->givePermissionTo('all');
    }
}
