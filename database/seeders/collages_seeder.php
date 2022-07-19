<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class collages_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {\DB::table('collages')->insert([
        ['name' => 'College of Humanities and Legal Studies'],
        ['name' => 'College of Agriculture and Natural Sciences'],
        ['name' => 'College of Health and Allied Sciences'],
        ['name' => 'College of Education Studies'],
        ['name' => 'College Of Distance Education']
        
    ]);
    }    
    
    }

