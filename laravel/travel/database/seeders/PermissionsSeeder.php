<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'manage users']);

        Permission::create(['name' => 'create trip']);

        Permission::create(['name' => 'manage trips']);
        Permission::create(['name' => 'publish trips']);

        // create roles 
        $role1 = Role::create(['name' => 'vartotojas']);
        $role2 = Role::create(['name' => 'vadovas']);
        $role3 = Role::create(['name' => 'administratorius']);

        // and assign existing permissions
        $role1->givePermissionTo('create trip');

        $role2->givePermissionTo('create trip');
        $role2->givePermissionTo('manage trips');
        $role2->givePermissionTo('publish trips');

        $role3->givePermissionTo('create trip');
        $role3->givePermissionTo('manage trips');
        $role3->givePermissionTo('publish trips');
        $role3->givePermissionTo('manage users');
    
        // create demo users
        $user = User::factory()->create([
            'name' => 'Vartotojas Vadovas',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'name' => 'Vartotojas Administratorius',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role3);


    }
}
