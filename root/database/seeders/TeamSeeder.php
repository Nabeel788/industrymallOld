<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name'=>'Cartherin Forres',
            'designation'=>'Marketing Director',
            'image'=>'6284ac6d00994mem-03.jpg',
            'facebook'=>'#',
            'twitter'=>'#',
            'instagram'=>'#',
            'linkedin'=>'#'
        ]);
        Team::create([
            'name'=>'Lisa John',
            'designation'=>'Fashion Designer',
            'image'=>'6284ac321b9f3mem-01.jpg',
            'facebook'=>'#',
            'twitter'=>'#',
            'instagram'=>'#',
            'linkedin'=>'#'
        ]);
        Team::create([
            'name'=>'Jane Doe',
            'designation'=>'Director',
            'image'=>'6284ac523a9e1mem-02.jpg',
            'facebook'=>'#',
            'twitter'=>'#',
            'instagram'=>'#',
            'linkedin'=>'#'
        ]);
    }
}
