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
        //$role2 = Role::create(['name'=>'Blogger']);
        $role2 = Role::create(['name'=>'Crear Post']);

        Permission::create(['name'=>'admin.home',
                            'description'=> 'Ver el dashboard'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.users.index',
                            'description'=> 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit',
                            'description'=> 'Asignar un rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.destroy',
                            'description'=> 'Eliminar un user'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.plans.index',
                            'description'=> 'Ver listado de planes'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.plans.create',
                            'description'=> 'Crear planes'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.plans.edit',
                            'description'=> 'Editar planes'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.plans.destroy',
                            'description'=> 'Eliminar planes'])->syncRoles([$role1]);


        Permission::create(['name'=>'admin.categorias.index',
                            'description'=> 'Ver listado de categorias'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categorias.create',
                            'description'=> 'Crear categorias'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categorias.edit',
                            'description'=> 'Editar categorias'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categorias.destroy',
                            'description'=> 'Eliminar categorias'])->syncRoles([$role1]);

        
        Permission::create(['name'=>'admin.instructors.index',
                            'description'=> 'Ver listado de instructores'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.instructors.create',
                            'description'=> 'Crear instructores'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.instructors.edit',
                            'description'=> 'Editar instructores'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.instructors.destroy',
                            'description'=> 'Eliminar instructores'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.posts.index',
                            'description'=> 'Ver listado de posts'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.posts.create',
                            'description'=> 'Crear posts'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.posts.edit',
                            'description'=> 'Editar posts'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.posts.destroy',
                            'description'=> 'Eliminar posts'])->syncRoles([$role1,$role2]);

        
    }
}
