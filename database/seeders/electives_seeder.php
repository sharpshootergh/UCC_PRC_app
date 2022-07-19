<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class electives_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('electives')->insert([
        ['name' => 'Accounting'
        ,'elect_type' => 1],
        ['name' => 'Applied electricity and electronics',
        'elect_type' => 2],
        ['name' => 'Auto mechanic',
        'elect_type' => 2],
        ['name' => 'Basketry',
        'elect_type' => 2],
        ['name' => 'Biology',
        'elect_type' => 2],
        ['name' => 'Building construction engineering',
        'elect_type' => 2],
        ['name' => 'Business management'
        ,'elect_type' => 1],
        ['name' => 'Carpentry and joinery',
        'elect_type' => 2],
        ['name' => 'Catering',
        'elect_type' => 2],
        ['name' => 'Ceramics and sculpture',
        'elect_type' => 2],
        ['name' => 'Chemistry'
        ,'elect_type' => 1],
        ['name' => 'Economics'
        ,'elect_type' => 1],
        ['name' => 'Elective maths'
        ,'elect_type' => 1],
        ['name' => 'Fashion design',
        'elect_type' => 2],
        ['name' => 'Food and nutrition',
        'elect_type' => 2],
        ['name' => 'French'
        ,'elect_type' => 1],
        ['name' => 'General knowledge in arts',
        'elect_type' => 2],
        ['name' => 'General textile',
        'elect_type' => 2],
        ['name' => 'Geography'
        ,'elect_type' => 1],
        ['name' => 'Government'
        ,'elect_type' => 1],
        ['name' => 'Graphic design',
        'elect_type' => 2],
        ['name' => 'History'
        ,'elect_type' => 1],
        ['name' => 'Leather work',
        'elect_type' => 2,],
        ['name' => 'Literature in english',
        'elect_type' => 2], 
        ['name' => 'Management in living',
        'elect_type' => 2],
        ['name' => 'Mechanical engineering craft practices',
        'elect_type' => 2],
        ['name' => 'Metal work',
        'elect_type' => 2],
        ['name' => 'Photography',
        'elect_type' => 2],
        ['name' => 'Physics'
        ,'elect_type' => 1],
        ['name' => 'Picture making',
        'elect_type' => 2],
        ['name' => 'Plumbing craft',
        'elect_type' => 2],
        ['name' => 'Principle of costing ',
        'elect_type' => 2],
        ['name' => 'Printing craft',
        'elect_type' => 2],
        ['name' => 'Technical drawing',
        'elect_type' => 2],
        ['name' => 'Textile',
        'elect_type' => 2],
        ['name' => 'Welding and fabrication',
        'elect_type' => 2],
        ['name' => 'Wood work',
        'elect_type' => 2],
        ['name' => 'Religious stuies',
        'elect_type' => 2],
        ['name' => 'General agriculture'
        ,'elect_type' => 1],
        ['name' => 'Animal husbandry',
        'elect_type' => 2],
        ['name' => 'Information and communication technology',
        'elect_type' => 2]
    ]);
    }    
}
