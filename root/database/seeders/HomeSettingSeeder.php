<?php

namespace Database\Seeders;

use App\Models\HomeSettings;
use Illuminate\Database\Seeder;

class HomeSettingSeeder extends Seeder
{
    public function run()
    {
        HomeSettings::create([
            'category1' => '1',
            'category2' => '1',
            'category3' => '1',
            'category4' => '1',
            'category1_image' => 'http://localhost:8081/industry-mall/root/upload/home-settings/2_295x672.jpg',
            'category2_image' => 'http://localhost:8081/industry-mall/root/upload/home-settings/2_295x672.jpg',
            'category3_image' => 'http://localhost:8081/industry-mall/root/upload/home-settings/2_295x672.jpg',
            'category4_image' => 'http://localhost:8081/industry-mall/root/upload/home-settings/2_295x672.jpg',
            'center_image1' => 'http://localhost:8081/industry-mall/root/upload/home-settings/3-1_610x200.jpg',
            'center_image2' => 'http://localhost:8081/industry-mall/root/upload/home-settings/3-1_610x200.jpg',
        ]);
    }
}
