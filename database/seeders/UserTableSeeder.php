<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Ádmin';
        $admin->email = 'admin123@gmail.com';
        $admin->password = bcrypt('12345678');
        $admin->username = 'admin';
        $admin->is_admin = true;
        $admin->role = 'admin';
        $admin->save();

        //
    }
}
