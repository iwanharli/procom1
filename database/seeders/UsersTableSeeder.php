<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Harlicuan',
                'email' => 'harlicuan@gmail.com',
                'password' => Hash::make('kecilkec1l'),
                'roles' => 'Administrator',
            ],
            [
                'name' => 'Harlicuan',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('kecilkec1l'),
                'roles' => 'Administrator',
            ],
            [
                'name' => 'Editor User',
                'email' => 'editor@gmail.com',
                'password' => Hash::make('kecilkec1l'),
                'roles' => 'Editor',
            ],
            [
                'name' => 'Penulis User',
                'email' => 'penulis@gmail.com',
                'password' => Hash::make('kecilkec1l'),
                'roles' => 'Penulis',
            ],
        ]);
    }
}
