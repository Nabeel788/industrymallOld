<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UOM;
class UnitSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UOM::create([
            'uom'=>'KG'
        ]);
        UOM::create([
            'uom'=>'PCS'
        ]);
        UOM::create([
            'uom'=>'DRUMS'
        ]);
        UOM::create([
            'uom'=>'LITRE'
        ]);
        UOM::create([
            'uom'=>'BAG'
        ]);
        UOM::create([
            'uom'=>'BOTTLES'
        ]);
        UOM::create([
            'uom'=>'CANS'
        ]);
        UOM::create([
            'uom'=>'COTTON'
        ]);
        UOM::create([
            'uom'=>'GRAMS'
        ]);
    }
}
