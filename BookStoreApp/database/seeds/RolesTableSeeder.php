<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = new Role();
      $role_admin->name = 'admin';
      $role_admin->description = 'an administrator user';
      $role_admin->save();

      $role_admin = new Role();
      $role_admin->name = 'user';
      $role_admin->description = 'an ordinary user';
      $role_admin->save();
    }
}
