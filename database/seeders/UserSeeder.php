<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        // DB::table('users')->insert([
        //     'id' => Str::uuid(),
        //     'name' => Str::random(10),
        //     'username' => Str::random(10),
        //     'password' => Hash::make('password'),
        // ]);
    }
}
