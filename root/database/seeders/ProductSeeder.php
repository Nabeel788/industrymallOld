<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductConditions;
use App\Models\ProductImages;
use App\Models\ProductLocations;
use App\Models\ProductShippment;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'code' => '',
            'name' => 'Product 1',
            'sku' => 'MS46891323',
            'description' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'details' => '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>',
            'menu_id' => 1,
            'category_id' => 1,
            'subcategory_id' => 1,
            'brand_id' => 1,
            'model_no' => 1,
            'make' => 'Admin',
            'min_order' => 1,
            'attachment' => 'ITLife.pdf',
            'type' => 'Parent',
            'slug' => 'product-1',
            'parent_id' => 1,
            'new_price' => '1',
            'new_sale_price' => '10',
            'new_warranty_days' => 1,
            'new_return_days' => 1,
            'refurnished_price' => 1,
            'refurnished_sale_price' => 1,
            'refurnished_warranty_days' => 1,
            'refurnished_return_days' => 1,
            'width' => 10,
            'height' => 20,
            'depth' => 30,
            'weight' => 40,
            'created_by' => 1
        ]);
        for ($i = 1; $i < 3; $i++) {
            ProductConditions::create([
                'pro_id' => 1, 'condition_id' => $i
            ]);
        }
        for ($i = 1; $i < 3; $i++) {
            ProductImages::create([
                'pro_id' => 1,
                'image' => '632c1c6b191eaezgif-1-69c3896f89.jpg',
                'url' => 'root/upload/products/632c1c6b191eaezgif-1-69c3896f89.jpg',
            ]);
        }
        for ($i = 1; $i < 3; $i++) {
            ProductShippment::create([
                'pro_id' => 1,
                'shipping_days' => '1',
                'shipping_charges' => '2',
                'import_charges' => '3',
                'tax_charges' => '4',
                'other_charges' => '5',
                'location_id' => 1,
                'new_price' => 123,
                'new_sale_price' => 456,
                'new_warranty_days' => 1,
                'refurnished_price' => 2,
                'refurnished_sale_price' => 2,
                'refurnished_warranty_days' => 2,
            ]);
        }

        $Productlocation = new ProductLocations();
        $Productlocation->pro_id = 1;
        $Productlocation->location_id = 1;
        $Productlocation->save();
    }
}
