<?php

namespace Database\Seeders;

use App\Models\BlogsCategories;
use Illuminate\Database\Seeder;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogsCategories::create(['title' => 'Clothes']);
        BlogsCategories::create(['title' => 'Entertainment']);
        BlogsCategories::create(['title' => 'Fashion']);
        BlogsCategories::create(['title' => 'Lifestyle']);
        BlogsCategories::create(['title' => 'Others']);
        BlogsCategories::create(['title' => 'Others']);
        BlogsCategories::create(['title' => 'Shoes']);
        BlogsCategories::create(['title' => 'Technology']);
    }
}
