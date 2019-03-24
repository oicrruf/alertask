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
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();
        
        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'admin@alertask.com';
        $user->password = bcrypt('jengaxdev');
        $user->save();
        $user->roles()->attach($role_admin);
        
        $user = new User();
        $user->name = 'Víctor Reyes';
        $user->email = 'vreyes@alertask.com';
        $user->password = bcrypt('78590168');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Daniel Gómez';
        $user->email = 'dgomez@alertask.com';
        $user->password = bcrypt('78820982');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
