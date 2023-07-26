<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run()
    {
        Brand::create([
            'brand_name' => 'Alkaram',
            'type' => 'brand',
            'link'=>'#',
            'logo'=>'62e0eb981fb80Rockwell Vector Logo-01.png'
        ]);
        Brand::create([
            'brand_name' => 'Khaadi',
            'type' => 'brand',
            'link'=>'#',
            'logo'=>'62e0eb981fb80Rockwell Vector Logo-01.png'
        ]);
        Brand::create([
            'brand_name' => 'Bareeze',
            'type' => 'brand',
            'link'=>'#',
            'logo'=>'62e0eb981fb80Rockwell Vector Logo-01.png'
        ]);
        Brand::create([
            'brand_name' => 'Gul Ahmed',
            'type' => 'brand',
            'link'=>'#',
            'logo'=>'62e0eb981fb80Rockwell Vector Logo-01.png'
        ]);
        Brand::create([
            'brand_name' => 'Junaid Jamshed',
            'type' => 'brand',
            'link'=>'#',
            'logo'=>'62e0eb981fb80Rockwell Vector Logo-01.png'
        ]);
        Brand::create([
            'brand_name' => 'Tariq Jameel',
            'type' => 'brand',
            'link'=>'#',
            'logo'=>'62e0eb981fb80Rockwell Vector Logo-01.png'
        ]);
        Brand::create([
            'brand_name' => 'AlMarah',
            'type' => 'brand',
            'link'=>'#',
            'logo'=>'62e0eb981fb80Rockwell Vector Logo-01.png'
        ]);
    }
}
