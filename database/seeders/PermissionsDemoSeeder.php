<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //Create Permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        //create roles and assign existing permissions
        $role1 = Role::create(['name' => 'writer']);

        $role1->givePermissionTo('edit articles');
        $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('publish articles');
        $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['name'=>'Super-Admin']);
        //gets all permissions via Gate::before rule, see AuthServiceProvider

        //Create demo users
        $user = \App\Models\User::factory()->create([
            'name'=>'Example User',
            'email'=>'test@example.com',
        ]);

        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name'=>'Example Super-Admin User',
            'email'=>'superadmin@example.com',
        ]);

        $user->assignRole($role3);


        
    }
}
