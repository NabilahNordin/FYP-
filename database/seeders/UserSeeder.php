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
        //
        $user = User::firstOrCreate([
            'name' => 'Student',
            'username' => 'student',
            'email' => 'student@example.com',
            'password' => 'student',
        ]);
        $user->assignRole('student');

        $user = User::firstOrCreate([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'admin',
        ]);
        $user->assignRole('admin');


        $user = User::firstOrCreate([
            'name' => 'kin',
            'username' => 'kin',
            'email' => 'kin@example.com',
            'password' => 'kin',
        ]);
        $user->assignRole('kin');
    }
}
