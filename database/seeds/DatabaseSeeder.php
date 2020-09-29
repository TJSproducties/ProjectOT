<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookSeeder::class);

        app()['cache']->forget('spatie.permission.cache');
        Permission::create(['name'=>'create category']);
        Permission::create(['name'=>'edit category']);
        Permission::create(['name'=>'delete category']);
        Permission::create(['name'=>'create books']);
        Permission::create(['name'=>'edit books']);
        Permission::create(['name'=>'delete books']);
        $role = Role::create(['name'=>'customer']);
        $role = Role::create(['name'=>'sales']);
        $role->givePermissionTo('create category','edit category');
        $role = Role::create(['name'=>'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
