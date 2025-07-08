<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions if not exists
        \Spatie\Permission\Models\Permission::firstOrCreate(
            ['name' => 'manage users', 'guard_name' => 'web']
        );
        \Spatie\Permission\Models\Permission::firstOrCreate(
            ['name' => 'manage roles', 'guard_name' => 'web']
        );
        \Spatie\Permission\Models\Permission::firstOrCreate(
            ['name' => 'manage permissions', 'guard_name' => 'web']
        );

        // Create roles if not exists
        $roleAdmin = \Spatie\Permission\Models\Role::firstOrCreate(
            ['name' => 'Admin', 'guard_name' => 'web']
        );
        $roleAdmin->givePermissionTo(\Spatie\Permission\Models\Permission::all());

        \Spatie\Permission\Models\Role::firstOrCreate(
            ['name' => 'User', 'guard_name' => 'web']
        );
    }
}
