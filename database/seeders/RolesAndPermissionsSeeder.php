<?php

namespace Database\Seeders;

use Faker\Provider\ar_EG\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create permissions
        Permission::create(['name' => 'create-technician']);
        Permission::create(['name' => 'delete-technician']);

        Permission::create(['name' => 'all-admins']);
        Permission::create(['name' => 'create-admin']);
        Permission::create(['name' => 'show-admin']);
        Permission::create(['name' => 'delete-admin']);



        Permission::create(['name' => 'create-service']);
        Permission::create(['name' => 'update-service']);
        Permission::create(['name' => 'delete-service']);

        Permission::create(['name' => 'all-clients']);
        Permission::create(['name' => 'show-client']);
        Permission::create(['name' => 'delete-client']);

        Permission::create(['name' => 'all-appointments']);
        Permission::create(['name' => 'show-appointment']);
        Permission::create(['name' => 'create-appointment']);
        Permission::create(['name' => 'update-appointment']);
        Permission::create(['name' => 'delete-appointment']);


        Permission::create(['name' => 'create-review']);
        Permission::create(['name' => 'update-review']);
        Permission::create(['name' => 'delete-review']);

        Permission::create(['name' => 'create-city']);
        Permission::create(['name' => 'delete-city']);

        Permission::create(['name' => 'show-caceled']);
        Permission::create(['name' => 'delete-caceled']);

        Permission::create(['name' => 'show-payments']);

        Permission::create(['name' => 'show-cancelled-appointments']);



    
        
       // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $technicianRole = Role::create(['name' => 'technician']);
        $clientrRole = Role::create(['name' => 'client']);

        // Assign permissions to roles

        // Admin
        $adminRole->givePermissionTo('create-technician');
        $adminRole->givePermissionTo('delete-technician');
        $adminRole->givePermissionTo('create-service');
        $adminRole->givePermissionTo('update-service');
        $adminRole->givePermissionTo('delete-service');
        $adminRole->givePermissionTo('all-clients');
        $adminRole->givePermissionTo('show-client');
        $adminRole->givePermissionTo('delete-client');
        $adminRole->givePermissionTo('all-appointments');
        $adminRole->givePermissionTo('show-appointment');
        $adminRole->givePermissionTo('update-appointment');
        $adminRole->givePermissionTo('delete-appointment');
        $adminRole->givePermissionTo('delete-review');
        $adminRole->givePermissionTo('create-city');
        $adminRole->givePermissionTo('delete-city');
      
        $adminRole->givePermissionTo('all-admins');
        $adminRole->givePermissionTo('create-admin');
        $adminRole->givePermissionTo('show-admin');
        $adminRole->givePermissionTo('delete-admin');

        $adminRole->givePermissionTo('show-caceled');
        $adminRole->givePermissionTo('delete-caceled'); 
        $adminRole->givePermissionTo('show-payments');

        $adminRole->givePermissionTo('show-cancelled-appointments');

        // Technician
        $technicianRole->givePermissionTo('all-clients');
        $technicianRole->givePermissionTo('show-client');
        $technicianRole->givePermissionTo('all-appointments');
        $technicianRole->givePermissionTo('show-appointment');
        $technicianRole->givePermissionTo('all-admins');
        $technicianRole->givePermissionTo('show-admin');
        $technicianRole->givePermissionTo('show-payments');

        
        // Client
        $clientrRole->givePermissionTo('all-appointments');
        $clientrRole->givePermissionTo('show-appointment');
        $clientrRole->givePermissionTo('create-appointment');
        $clientrRole->givePermissionTo('update-appointment');
        $clientrRole->givePermissionTo('delete-appointment');
        $clientrRole->givePermissionTo('create-review');
        $clientrRole->givePermissionTo('update-review');
        $clientrRole->givePermissionTo('delete-review');
        $clientrRole->givePermissionTo('all-admins');
        $clientrRole->givePermissionTo('show-admin');



    }
}
