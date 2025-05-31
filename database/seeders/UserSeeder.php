<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ahmet Rasim',
                'email' => 'a@a.com',
                'password' => bcrypt('12345678'),
                'role' => 'student'
            ],
            [
                'name' => 'Instructor',
                'email' => 'ins@ins.com',
                'password' => bcrypt('12345678'),
                'role' => 'instructor'
            ]
        ];
        User::insert($users);
        //
    }
}
