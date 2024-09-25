<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'admin@example.com', // Email untuk admin
            'username' => 'admin',
            'password' => bcrypt('admin123'), // Ganti dengan password yang diinginkan
            'role' => 'admin', // Pastikan ada kolom 'role' di tabel
            'created_at' => now(),
            'name' => 'sela',
            'updated_at' => now(),
        ]);

        // Menambahkan User
        DB::table('users')->insert([
            'email' => 'user@example.com', // Email untuk user
            'username' => 'user',
            'password' => bcrypt('user123'), // Ganti dengan password yang diinginkan
            'role' => 'user', // Pastikan ada kolom 'role' di tabel
            'created_at' => now(),
            'name' => 'sela',
            'updated_at' => now(),
        ]);
    }
}
