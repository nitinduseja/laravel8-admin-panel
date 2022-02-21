<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::insert([
            [
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
            ],
            [
                'role_id' => 2,
                'name' => 'Employee',
                'email' => 'employee@test.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
            ],
        ]);
    }
}
