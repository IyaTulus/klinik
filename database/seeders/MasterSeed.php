<?php

namespace Database\Seeders;

use App\Models\Clinics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clinics::factory()->count(5)->create();
    }
}
