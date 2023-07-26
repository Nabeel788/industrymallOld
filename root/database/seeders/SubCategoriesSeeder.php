<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
{
    public function run()
    {
        SubCategory::create([
            'category_id'=>1,
            'name'=>'Sub Category 1',
            'biller'=>'Admin',
            'slug'=>'sub-category-1'
        ]);
        SubCategory::create([
            'category_id'=>2,
            'name'=>'Sub Category 2',
            'biller'=>'Admin',
            'slug'=>'sub-category-2'
        ]);
        SubCategory::create([
            'category_id'=>1,
            'name'=>'Sub Category 3',
            'biller'=>'Admin',
            'slug'=>'sub-category-3'
        ]);
    }
}
