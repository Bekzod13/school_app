<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run(): void
    {
        for($i = 0; $i < 50; $i++ )
        {
            Group::create([
                'number' => rand(1, 100),
                'title' => fake()->firstName,
            ]);
        }
    }
}
