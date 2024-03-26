<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name'  => 'User',
            'email' => 'nicky@mailinator.com',
            'password' => bcrypt('123456789')
        ];
        User::create($user);

        $admin = [
            ['name'  => 'Admin','email' => 'admin@mailinator.com','password' =>bcrypt('123456789')],
        ];
        Admin::insert($admin);

    }
}