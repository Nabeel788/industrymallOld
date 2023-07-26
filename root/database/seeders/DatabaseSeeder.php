<?php

namespace Database\Seeders;

use App\Models\SingleProductInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call([
            DeleteAllFilesSeeder::class,
            AboutUsSeeder::class,
            TeamSeeder::class,
            RoleTableSeeder::class,
            UsersTableSeeder::class,
            SettingsTableSeeder::class,
            SystemLogoTableSeeder::class,
            UnitSeed::class,
            CaratSeeder::class,
            BrandSeeder::class,
            MenusSeeder::class,
            CategoriesSeeder::class,
            SubCategoriesSeeder::class,
            ProductSeeder::class,
            BannerSeeder::class,
            // FAQCategorySeeder::class,
            // FAQ1Seeder::class,
            // FAQSeeder::class,
            TermsConditionsSeeder::class,
            ReturnExchangePolicySeeder::class,
            LocationsSeeder::class,
            ConditionsSeeder::class,
            BlogCategoriesSeeder::class,
            ServicesSeeder::class,
            TestimonialsSeeder::class,
            // CountriesSeeder::class,
            SingleProductInfoSeeder::class,
            HomeSettingSeeder::class
    ]);
        
    }
}