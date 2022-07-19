<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class programmes_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('programmes')->insert([
            ['name' => 'B.A. Social Sciences',
             'faculty_id' => 1 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Social Sciences',
             'faculty_id' => 1 ,
             'prog_type_id' => 1  ],
             ['name' => ' B.Sc. Hospitality Management',
             'faculty_id' => 1 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.Sc. Tourism Management',
             'faculty_id' => 1 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Anthropology',
             'faculty_id' => 1 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Population & Health',
             'faculty_id' => 1 ,
             'prog_type_id' => 1  ],
             ['name' => 'Bachelor of Commerce (Accounting)',
             'faculty_id' => 2 ,
             'prog_type_id' => 1  ],
             ['name' => 'Bachelor of Commerce (Human Resource Management)',
             'faculty_id' => 2 ,
             'prog_type_id' => 2  ],
             ['name' => 'Bachelor of Commerce (Procurement and Supply Chain Management)',
             'faculty_id' => 2 ,
             'prog_type_id' => 2  ],
             ['name' => 'Bachelor of Commerce (Finance)',
             'faculty_id' => 2 ,
             'prog_type_id' => 2  ],
             ['name' => ' Bachelor of Commerce (Management)',
             'faculty_id' => 2 ,
             'prog_type_id' => 2  ],
             ['name' => 'B.A. African Studies',
             'faculty_id' => 3 ,
             'prog_type_id' => 1  ],
             ['name' => ' B.A. Arts',
             'faculty_id' => 3 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Communication Studies',
             'faculty_id' => 3 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Dance',
             'faculty_id' => 3 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Film Studies',
             'faculty_id' => 3 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Music',
             'faculty_id' => 3 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Theatre Studies',
             'faculty_id' => 3 ,
             'prog_type_id' => 1  ],
             ['name' => 'Bachelor of Laws (LLB)',
             'faculty_id' => 4 ,
             'prog_type_id' => 2  ],
            //  ['name' => 'Bachelor of Laws (LLB)',
            //  'faculty_id' => 5 ,
            //  'prog_type_id' => 1  ],
             ['name' => 'B.Sc. (Applied Economics)',
             'faculty_id' => 5 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.Sc. Economics',
             'faculty_id' => 5 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.A. Economics with Finance',
             'faculty_id' => 5 ,
             'prog_type_id' => 1  ],
             ['name' => 'B.Sc. Development Economics',
             'faculty_id' => 5 ,
             'prog_type_id' => 1  ]

        ]);
    }
}
