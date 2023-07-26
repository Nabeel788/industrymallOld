<?php

namespace Database\Seeders;

use App\Models\Locations;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Locations::create([
            'name' => 'Pakistan',
            'phoneno' => '0331443489',
            'email' => 'pakistan@gmail.com',
            'address' => 'Pakistan',
            'company' => 'Pakistan',
            'google_link' => 'aaaaaaaa',
            'for_about' => 1
        ]);
        Locations::create([
            'name' => 'Singapore',
            'phoneno' => '0331443489',
            'email' => 'singapore@gmail.com',
            'address' => 'Singapore',
            'company' => 'Singapore',
            'google_link' => 'aaaaaaaa',
            'for_about' => 1
        ]);
        Locations::create([
            'name' => 'USA',
            'phoneno' => '0331443489',
            'email' => 'usa@gmail.com',
            'address' => 'USA',
            'company' => 'USA',
            'google_link' => 'aaaaaaaa',
            'for_about' => 1
        ]);
    }
}
