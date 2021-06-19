<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create roles
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'edit']);
        $roleUser = Role::create(['name' => 'user']);


        //Permission List as array
        $permissions = [
            //Dashboard
            'dashboard.view',

            //blog Permissions
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',

             //Admin Permissions
             'admin.create',
             'admin.view',
             'admin.edit',
             'admin.delete',
             'admin.approve',

              //Role Permissions
              'role.create',
              'role.view',
              'role.edit',
              'role.delete',
              'role.approve',

               //Profile Permissions
               'profile.view',
               'profile.edit',

        ];



        //create and assign Permissions

        //$permission = Permission::create(['name' => 'edit articles']);
        for ($i=0; $i < count($permissions); $i++) {

          //create
          $permission = Permission::create(['name' => $permissions[$i]]);
          $roleSuperAdmin->givePermissionTo($permission);
$permission->assignRole($roleSuperAdmin);

        }

    }
}
