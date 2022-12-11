<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class CreateAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456')
        ]);
        $role = Role::create(['name'=>'admin']);
        $user->assignRole([$role->id]);

        $accUser = User::create([
            'name'=>'User1',
            'email'=>'user1@gmail.com',
            'password'=>bcrypt('123456')
        ]);
        $role = Role::create(['name'=>'penyetuju']);
        $user->assignRole([$role->id]);
    }
}
