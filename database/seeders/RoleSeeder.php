<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        $roles =[
            'admin',
            'teacher',
            'student'
        ];

        foreach ($roles as $role)
        {
            Role::create([
                'title' => $role,
            ]);
        }
    }
}
