<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carat;
class CaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carats = new Carat();
        $carats->name = '18';
        $carats->save();

        $carats = new Carat();
        $carats->name = '21';
        $carats->save();

        $carats = new Carat();
        $carats->name = '22';
        $carats->save();
        
        $carats = new Carat();
        $carats->name = '24';
        $carats->save();
    }
}
