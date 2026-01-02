<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web', // WAJIB jika guna spatie
        ]);
     
        Role::firstOrCreate([
            'name' => 'student',
            'guard_name' => 'web', // WAJIB jika guna spatie
        ]);

        Role::firstOrCreate([
            'name' => 'kin',
            'guard_name' => 'web', // WAJIB jika guna spatie
        ]);
    }
}
