<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class faculties_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Faculties')->insert([
            ['name' => 'Faculty of Social Sciences',
             'collage_id'=> '1'],
            ['name' => 'School of Business',
             'collage_id'=> '1'],
            ['name' => 'Faculty of Arts',
             'collage_id'=> '1'],
            ['name' => 'Faculty of Law',
             'collage_id'=> '1'],
            ['name' => 'School of Economics',
             'collage_id'=> '1'],
            ['name' => 'Faculty of Humanities and Social Sciences Education',
             'collage_id'=> '2'], 
            ['name' => 'Faculty of Science & Technology Education',
             'collage_id'=> '2'],
            ['name' => 'Faculty of Educational Foundations',
             'collage_id'=> '2'], 
             ['name' => 'School of Agriculture',
             'collage_id'=> '3'],
             ['name' => 'School of Physical Sciences',
             'collage_id'=> '3'],
             ['name' => 'School of Physical Sciences',
             'collage_id'=> '3'],
             ['name' => 'School of Biological Science',
             'collage_id'=> '3'],
             ['name' => 'School of Medical Sciences',
             'collage_id'=> '4'],
             ['name' => 'School of Allied Health Sciences',
             'collage_id'=> '4'],
             ['name' => 'School of Nursing and Midwifery',
             'collage_id'=> '4'],
             ['name' => 'School of Pharmacy and Pharmaceuticals',
             'collage_id'=> '4']
             
        ]);
    }
}
