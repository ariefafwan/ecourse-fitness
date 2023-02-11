<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'admin',
            'role_id' => '1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::Create([
            'name' => 'pelatih',
            'role_id' => '2',
            'email' => 'pelatih@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::Create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
