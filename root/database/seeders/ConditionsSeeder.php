<?php

namespace Database\Seeders;

use App\Models\Conditions;
use Illuminate\Database\Seeder;

class ConditionsSeeder extends Seeder
{
    public function run()
    {
        Conditions::create(['name' => 'NEW']);
        Conditions::create(['name' => 'REFURBISHED']);
    }
}
