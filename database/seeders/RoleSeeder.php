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
        $role1 = Role::create(["name" => "Admin"]);
        $role2 = Role::create(["name" => "Blogger"]);

        Permission::create(["name" => "admin.home", "description" => "Ver el dashboard"])->syncRoles([$role1, $role2]);

        Permission::create(["name" => "admin.users.index", "description" => "Ver listado de usuarios"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.users.edit", "description" => "Asignar un rol"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.roles.index", "description" => "Ver listado de roles"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.roles.create", "description" => "Agregar roles"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.roles.edit", "description" => "Editar roles"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.roles.destroy", "description" => "Eliminar roles"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.categorias.index", "description" => "Ver listado de categorias"])->syncRoles([$role1, $role2]);
        Permission::create(["name" => "admin.categorias.create", "description" => "Agregar categorias"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.categorias.edit", "description" => "Editar categorias"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.categorias.destroy", "description" => "Eliminar categorias"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.marcas.index", "description" => "Ver listado de marcas"])->syncRoles([$role1, $role2]);
        Permission::create(["name" => "admin.marcas.create", "description" => "Agregar marcas"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.marcas.edit", "description" => "Editar marcas"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.marcas.destroy", "description" => "Eliminar marcas"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.modelos.index", "description" => "Ver listado de modelos"])->syncRoles([$role1, $role2]);
        Permission::create(["name" => "admin.modelos.create", "description" => "Agregar modelos"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.modelos.edit", "description" => "Editar modelos"])->syncRoles([$role1]);
        Permission::create(["name" => "admin.modelos.destroy", "description" => "Eliminar modelos"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.repuestos.index", "description" => "Ver listado de repuestos"])->syncRoles([$role1, $role2]);
        Permission::create(["name" => "admin.repuestos.create", "description" => "Agregar repuestos"])->syncRoles([$role1, $role2]);
        Permission::create(["name" => "admin.repuestos.edit", "description" => "Editar repuestos"])->syncRoles([$role1, $role2]);
        Permission::create(["name" => "admin.repuestos.destroy", "description" => "Eliminar repuestos"])->syncRoles([$role1, $role2]);

        Permission::create(["name" => "consulta.consultas.index", "description" => "Ver listado de consultas"])->syncRoles([$role1]);
        Permission::create(["name" => "consulta.consultas.edit", "description" => "Editar consultas"])->syncRoles([$role1]);
        Permission::create(["name" => "consulta.consultas.destroy", "description" => "Eliminar consultas"])->syncRoles([$role1]);

        Permission::create(["name" => "formulario.formularios.index", "description" => "Ver listado de formularios de compras hechos por los usuarios"])->syncRoles([$role1]);
        Permission::create(["name" => "formulario.formularios.edit", "description" => "Ver formulario de compra realizado por el usuario"])->syncRoles([$role1]);
    }
}
