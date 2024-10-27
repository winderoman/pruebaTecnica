<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create();

        DB::table('users')->insert([
            'name' => "admin",
            'lastname' => "Raul",
            'lastname' => "Raul",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'phone' => '3217894556',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}