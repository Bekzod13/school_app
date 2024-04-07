<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
//        $table->foreignId('role_id')->default(3)->references('id')->on('roles')->cascadeOnDelete();
//        $table->integer('group_id')->nullable();
//        $table->string('email')->unique()->nullable();
//        $table->timestamp('email_verified_at')->nullable();
//        $table->string('password')->nullable();
//        $table->string('firstname');
//        $table->string('lastname');
//        $table->text('address')->nullable();
//        $table->string('passport');
//        $table->string('old_school')->nullable();
        User::create([
            'role_id' => 1,
            'email' => 'admin@mail.uz',
            'password' => 'passwordno',
            'firstname' => 'admin'
        ]);

        $groups = Group::all();

        foreach ($groups as $group)
        {
            for($i = 0; $i < 50; $i++ )
            {
                User::create([
                    'group_id' => $group->id,
                    'firstname' => fake()->firstName,
                    'lastname' => fake()->lastName,
                    'address' => fake()->paragraph,
                    'passport' => 'AB'. rand(1000000, 9999999),
                    'old_school' => rand(1, 50) . " - " . fake()->firstName
                ]);
            }
        }


    }
}
