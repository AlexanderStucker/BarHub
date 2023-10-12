<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drink;
use App\Models\Food;

class RemoveDataSeeder extends Seeder
{
    public function run()
    {
        Drink::truncate();
        Food::truncate();
    }
}

