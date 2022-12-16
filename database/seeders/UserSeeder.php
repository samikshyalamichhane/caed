<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('aboutuses')->insert([
            'name' => 'CAED',
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add User',
            'guard_name' => 'web',
            'group' => 'User'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit User',
            'guard_name' => 'web',
            'group' => 'User'
        ]);
        DB::table('permissions')->insert([
            'name' => 'View User',
            'guard_name' => 'web',
            'group' => 'User'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete User',
            'guard_name' => 'web',
            'group' => 'User'
        ]);


        $user = User::create([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'publish' => '1',
        ]);

        $user->assignRole([1]);
    }
}
