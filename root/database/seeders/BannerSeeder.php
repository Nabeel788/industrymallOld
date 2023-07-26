<?php

namespace Database\Seeders;

use App\Models\Banners;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{   
    public function run()
    {
        for ($i=1; $i < 4; $i++) { 
            Banners::create([
                'title1'=>"Custom Men's",
                'title2'=>'Running Shoes',
                'offer'=>'Sale upto 30% off',
                'image'=>'http://localhost:8081/industry-mall/root/upload/banners/img'.$i.'.png',
                'bg_image' => 'http://localhost:8081/industry-mall/root/upload/banners/slide-'.$i.'.jpg',
                'url'=>'#'
            ]);
        }
    }
}
