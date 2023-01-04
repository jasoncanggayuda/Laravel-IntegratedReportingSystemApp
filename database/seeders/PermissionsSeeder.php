<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;
class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'validate']);
        Permission::create(['name' => 'unvalidate']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Pegawai']);

        $role2 = Role::create(['name' => 'Supervisor']);

        $role3 = Role::create(['name' => 'Clerk-Maintenance']);

        $role4 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create users
        $user = \App\Models\User::factory()->create([
            'name' => 'Pegawai',
            'email' => 'pegawai@gmail.com',
            'password' => Hash::make('12345678')
            
        ]);
        $user->assignRole($role1);
        //
        $user = \App\Models\User::factory()->create([
            'name' => 'Supervisor',
            'email' => 'supervisor@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $user->assignRole($role2);
        //
        $user = \App\Models\User::factory()->create([
            'name' => 'Clerk Maintenance',
            'email' => 'CM@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $user->assignRole($role3);
        //
        $superAdmin = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('12345678')
        ]);
        $superAdmin->assignRole($role4);
    }
}
