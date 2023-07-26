<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        Services::create([
            'title' => 'BRANDING',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur congue erat ac molestie.</p>',
            'image' => '62d14cff5a01bpngwing.com.png',
            'slug' => 'branding'
        ]);
        Services::create([
            'title' => 'DESIGN & DEVELOPMENT',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur congue erat ac molestie.</p>',
            'image' => '62d1588843108pngwing.com (1).png',
            'slug' => 'design-development'
        ]);
        Services::create([
            'title' => 'MARKETING',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur congue erat ac molestie.</p>',
            'image' => '62d159e593423pngwing.com (2).png',
            'slug' => 'marketing'
        ]);
        Services::create([
            'title' => 'BRANDING 1',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur congue erat ac molestie.</p>',
            'image' => '62d14cff5a01bpngwing.com.png',
            'slug' => 'branding-1'
        ]);
        Services::create([
            'title' => 'DESIGN & DEVELOPMENT 1',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur congue erat ac molestie.</p>',
            'image' => '62d1588843108pngwing.com (1).png',
            'slug' => 'design-development-1'
        ]);
        Services::create([
            'title' => 'MARKETING 1',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur congue erat ac molestie.</p>',
            'image' => '62d159e593423pngwing.com (2).png',
            'slug' => 'marketing-1'
        ]);
    }
}
