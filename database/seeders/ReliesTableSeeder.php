<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rely;

class ReliesTableSeeder extends Seeder
{
    public function run()
    {
        Rely::factory()->count(10)->create();
    }
}

