<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname' => 'admin',
            'lname' => '123',
            'gender'=> 'female',
            'email' => 'admin@gmail.com',
            'contactno' => '9578019283',
            'username' => 'admin',
            'password' => 'admin',
        ]);

    }
    

}