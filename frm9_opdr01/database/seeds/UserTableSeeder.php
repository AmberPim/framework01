<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_visitor = Role::where('name', 'visitor')->first();
        $role_admin  = Role::where('name', 'administrator')->first();

        $visitor = new User();
        $visitor->name = 'visitor';
        $visitor->email = 'visitor@exsample.com';
        $visitor->password = bcrypt('secret');
        $visitor->save();
        $visitor->roles()->attach($role_visitor);

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
