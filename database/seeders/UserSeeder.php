<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [[
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123123',
            'level' => 'Admin'
        ],[
            'name' => 'Guru',
            'email' => 'guru@gmail.com',
            'password' => 'guru123123',
            'level' => 'Guru'
        ]];

        foreach($user as $data){
            User::create($data);
        }
    }
}
