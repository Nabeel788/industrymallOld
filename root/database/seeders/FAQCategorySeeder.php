<?php

namespace Database\Seeders;

use App\Models\FaqCategories;
use Illuminate\Database\Seeder;

class FAQCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FaqCategories::create(['title' => 'ORDERING']);
        FaqCategories::create(['title' => 'SHIPPING & DELIVERY']);
    }
}
