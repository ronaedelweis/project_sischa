<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'edel',
            'level' => 'admin',
            'email' => 'edel@gmail.com',
            'password' => hash::make('12345678'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'sapri',
            'level' => 'customer',
            'email' => 'sapri@gmail.com',
            'password' => hash::make('12345678'),
            'remember_token' => Str::random(60),
        ]);
    }
}
