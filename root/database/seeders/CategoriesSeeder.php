<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        Category::create(['menu_id' => 1, 'name' => 'Mens', 'biller' => 'admin']);
        Category::create(['menu_id' => 1, 'name' => 'Womens', 'biller' => 'admin']);
        Category::create(['menu_id' => 1, 'name' => 'Kids', 'biller' => 'admin']);
    }
}
