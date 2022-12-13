<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'そうしのまくら',
            'email' => 'test1@test.com',
            'password' => Hash::make('test'),
        ]);

        DB::table('users')->insert([
            'name' => 'そうしのまくら',
            'email' => 'test2@test.com',
            'password' => Hash::make('test'),
        ]);

        DB::table('users')->insert([
            'name' => 'そうしのまくら',
            'email' => 'test3@test.com',
            'password' => Hash::make('test'),
        ]);
    }
}
