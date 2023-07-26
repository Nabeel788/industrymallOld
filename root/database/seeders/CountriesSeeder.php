<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountriesSeeder extends Seeder
{
    public function run()
    {
        $json = File::get('database/countries.json');
        $list = json_decode($json,true);

        foreach ($list as $value) {
            Countries::create(["name" => $value['name']]);
        }
    }
}
