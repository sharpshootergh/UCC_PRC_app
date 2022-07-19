<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { $this->call([
        elective_types_seeder::class,
        electives_seeder::class,
        collages_seeder::class,
        faculties_seeder::class,
        programme_types::class,
        programmes_seeder::class
       
    ]);
    } 
}
