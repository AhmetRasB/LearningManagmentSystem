<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      
           Admin::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);
           Admin::firstOrCreate([
            'name' => 'Admin2',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('12345678'),
        ]);
        
    }
}
