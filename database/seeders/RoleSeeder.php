<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'usuario']);
        

        Permission::create(['name' => "home"])->syncRoles($role1, $role2);
        Permission::create(['name' => "vista1"])->assignRole($role1);
        Permission::create(['name' => "vista2"])->assignRole($role2);

    }
}
