<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    public function run()
    {
        Menu::create(['name' => 'Menu 1', 'icon' => 'fa fa-building','image'=>'banner2.jpg']);
        Menu::create(['name' => 'Menu 2', 'icon' => 'fa fa-industry','image'=>'banner2.jpg']);
        Menu::create(['name' => 'Menu 3', 'icon' => 'fa fa-magnet','image'=>'banner2.jpg']);
    }
}
