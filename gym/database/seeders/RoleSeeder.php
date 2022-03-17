<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Blogger']);

        Permission::create(['name'=>'admin.home'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.categorias.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.categorias.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.categorias.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.categorias.destroy'])->syncRoles([$role1,$role2]);

        
        Permission::create(['name'=>'admin.instructors.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.instructors.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.instructors.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.instructors.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.posts.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.posts.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.posts.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.posts.destroy'])->syncRoles([$role1,$role2]);

        
    }
}
