<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();


      $admin = new User();
      $admin->name='Matt Hill';
      $admin->email='admin@football.ie';
      $admin->password= bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);




    }
}
