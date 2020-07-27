<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//users
        Permission::create([
        	'name'	=>'Navegar usuarios',
        	'slug'	=>'users.index',
        	'description'	=>'Lista y navega todos los usuarios el sistema',

        ]);

        Permission::create([
        	'name'	=>'Ver detalle de usuario',
        	'slug'	=>'users.show',
        	'description'	=>'ver detalle de cada usuario del sistema',

        ]);


        Permission::create([
        	'name'	=>'Edicion de usuarios',
        	'slug'	=>'users.edit',
        	'description'	=>' Editar usuario del sistema',

        ]);


        Permission::create([
        	'name'	=>'Eliminar usuarios',
        	'slug'	=>'users.destroy',
        	'description'	=>'Elimina cualquier  usuario del sistema',

        ]);


        //roles
        Permission::create([
        	'name'	=>'Navegar roles',
        	'slug'	=>'roles.index',
        	'description'	=>'Lista y navega todos los roles el sistema',

        ]);

        Permission::create([
        	'name'	=>'Ver detalle de rol',
        	'slug'	=>'roles.show',
        	'description'	=>'ver detalle de cada rol del sistema',

        ]);


        Permission::create([
        	'name'	=>'Edicion de roles',
        	'slug'	=>'roles.create',
        	'description'	=>' Crea rol del sistema',

        ]);

        Permission::create([
        	'name'	=>'Creacion de roles',
        	'slug'	=>'roles.edit',
        	'description'	=>' Editar rol del sistema',

        ]);


        Permission::create([
        	'name'	=>'Eliminar roles',
        	'slug'	=>'roles.destroy',
        	'description'	=>'Elimina cualquier  rol del sistema',

        ]);

         //Productos
        Permission::create([
        	'name'	=>'Navegar productos',
        	'slug'	=>'products.index',
        	'description'	=>'Lista y navega todos los productos el sistema',

        ]);

        Permission::create([
        	'name'	=>'Ver detalle de producto',
        	'slug'	=>'products.show',
        	'description'	=>'ver detalle de cada producto del sistema',

        ]);

        Permission::create([
        	'name'	=>'Edicion de productos',
        	'slug'	=>'products.create',
        	'description'	=>' Editar producto del sistema',

        ]);

        Permission::create([
        	'name'	=>'Creacion de productos',
        	'slug'	=>'products.edit',
        	'description'	=>' Editar producto del sistema',

        ]);

        Permission::create([
        	'name'	=>'Eliminar productos',
        	'slug'	=>'products.destroy',
        	'description'	=>'Elimina cualquier  producto del sistema',

        ]);
    }
}
