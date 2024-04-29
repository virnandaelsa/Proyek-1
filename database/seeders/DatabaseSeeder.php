<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Dummy;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Dummy::factory(30)->create();

        User::create([
            'name' =>'admin',
            'email' =>'virnandaelsa29@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('rahasia'), // Menggunakan bcrypt() untuk mengenkripsi password
            'remember_token' => Str::random(10),
        ]);        
    }
}
