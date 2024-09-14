<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;

    public function run(): void
    {
        User::create([
            'name' => 'Muhammad Subhan Al Azmi',
            'email' => 'pota-head@gmail.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('potaadmin123'),
            'remember_token' => Str::random(10),
        ])->assignRole('admin');
    }
}
