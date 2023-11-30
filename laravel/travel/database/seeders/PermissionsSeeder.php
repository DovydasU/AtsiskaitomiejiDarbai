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

        $admin = Role::create(['name' => 'svetaines administratorius']);
        $vadovas = Role::create(['name' => 'kelioniu vadovas']);
        $vartotojas = Role::create(['name' => 'vartotojas']);
        // create permissions
        // Permission::create(['name' => 'manage users']);

        // Permission::create(['name' => 'create trip']);

        // Permission::create(['name' => 'manage trips']);
        // Permission::create(['name' => 'publish trips']);
        Permission::create(['name' => 'write review']);
        Permission::create(['name' => 'manage reviews']);
        Permission::create(['name' => 'delete review']);
        Permission::create(['name' => 'change review']);

        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'manage trip']);
        Permission::create(['name' => 'add trip']);
        Permission::create(['name' => 'delete trip']);
        // create roles 
        // $role1 = Role::create(['name' => 'vartotojas']);
        // $role2 = Role::create(['name' => 'vadovas']);
        // $role3 = Role::create(['name' => 'administratorius']);

        // and assign existing permissions
        // $vadovas->givePermissionTo('create trip');

        // $vadovas->givePermissionTo('create trip');
        // $vadovas->givePermissionTo('manage trips');
        // $vadovas->givePermissionTo('publish trips');

        // $admin->givePermissionTo('create trip');
        // $admin->givePermissionTo('manage trips');
        // $admin->givePermissionTo('publish trips');
        // $admin->givePermissionTo('manage users');

        $vadovas->givePermissionTo('manage trip');
        $vadovas->givePermissionTo('add trip');
        $vadovas->givePermissionTo('delete trip');

        $admin->givePermissionTo('manage trip');
        $admin->givePermissionTo('add trip');
        $admin->givePermissionTo('delete trip');
        $admin->givePermissionTo('manage reviews');
        $admin->givePermissionTo('delete review');
        $admin->givePermissionTo('change review');

        $vartotojas->givePermissionTo('write review');
    
        // create demo users
        // $user = User::factory()->create([
        //     'name' => 'Vartotojas Vadovas',
        //     'email' => 'test@example.com',
        // ]);
        // $user->assignRole($role2);

        // $user = User::factory()->create([
        //     'name' => 'Vartotojas Administratorius',
        //     'email' => 'admin@example.com',
        // ]);
        // $user->assignRole($role3);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@trip.lt'
        ])->assignRole('svetaines administratorius');

        User::factory()->create([
            'name' => 'Greece',
            'email' => 'greece@trip.lt'
        ])->assignRole('kelioniu vadovas');

        for ($i = 0; $i < 10; $i++) {
            User::factory()->create()->assignRole('kelioniu vadovas');
        }
        for ($i = 0; $i < 10; $i++) {
            User::factory()->create()->assignRole('vartotojas');
        }


    }
}
