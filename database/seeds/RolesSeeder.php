<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Role();
        $role->name = 'Admin';
        $role->desc = 'Admin';
        $role->save();

        $role = new \App\Role();
        $role->name = 'Editor';
        $role->desc = 'Editor';
        $role->save();

        $role = new \App\Role();
        $role->name = 'Manager';
        $role->desc = 'Manager';
        $role->save();
    }
}
