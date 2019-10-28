<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_visitor = new Role();
        $role_visitor ->name = 'visitor';
        $role_visitor ->description = 'visitor';
        $role_visitor ->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'administrator';
        $role_admin->save();
    }
}
