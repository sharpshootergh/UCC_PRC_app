<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class programme_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('programme_types')->insert([
            ['name' => 'restricted'],
             ['name' => 'unrestrited' ]
            ]);
    }
}
