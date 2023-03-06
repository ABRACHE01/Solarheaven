<?php

namespace Database\Seeders;

use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnisianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technician::factory()->count(10)->create();
    }
}
