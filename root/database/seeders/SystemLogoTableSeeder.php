<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SystemLogo;

class SystemLogoTableSeeder extends Seeder
{
  public function run()
  {
    $logo = new SystemLogo();
    $logo->image = 'Industry Mall Logo-01.png';
    $logo->save();
  }
}
