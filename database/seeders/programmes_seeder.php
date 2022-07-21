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
             ['name' => ' B.A. Social Sciences',
             'faculty_id' => 1 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Geography & Regional Planning',
             'faculty_id' => 1 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Hospitality Management',
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
             'prog_type_id' =>2  ],

             ['name' => 'Bachelor of Commerce (Management)',
             'faculty_id' => 2 ,
             'prog_type_id' => 2  ],

             ['name' => 'B.A. African Studies',
             'faculty_id' => 3 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.A. Arts',
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
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Arts',
             'faculty_id' => 6 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Social Sciences',
             'faculty_id' => 6 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Social Studies',
             'faculty_id' => 6 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Management',
             'faculty_id' => 6 ,
             'prog_type_id' => 1  ],

             ['name' => ' B.Ed. Accounting',
             'faculty_id' => 6 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Science',
             'faculty_id' => 7 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'Bachelor of Fine Art Education (Painting/Sculpture)',
             'faculty_id' => 7 ,
             'prog_type_id' => 1  ],

             ['name' => ' B.Ed. Communication Design',
             'faculty_id' => 7 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Ed. Home Economics',
             'faculty_id' => 7 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Mathematics',
             'faculty_id' => 7 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Health, Physical Education and Recreation',
             'faculty_id' => 7 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Health Sciences Education',
             'faculty_id' => 7 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Computer Science',
             'faculty_id' => 7 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Psychology',
             'faculty_id' => 8 ,
             'prog_type_id' => 2  ],

             ['name' => 'B.Ed. Early Childhood Education',
             'faculty_id' => 8 ,
             'prog_type_id' => 2  ],

             ['name' => 'B.Ed. Basic Education',
             'faculty_id' => 8 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Primary Education',
             'faculty_id' => 8 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Ed. Junior High School Education',
             'faculty_id' => 8 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Agriculture',
             'faculty_id' => 9 ,
             'prog_type_id' => 1  ],
             

             ['name' => 'B.Sc. Agricultural Extension',
             'faculty_id' => 9 ,
             'prog_type_id' => 1  ],
             

             ['name' => 'B.Sc. Agricultural Extension and Community Development ',
             'faculty_id' => 9 ,
             'prog_type_id' => 1  ],
             

             ['name' => 'B.Sc. Agro-Processing',
             'faculty_id' => 9 ,
             'prog_type_id' => 1  ],
             

             ['name' => 'B.Sc. Agri-business',
             'faculty_id' => 9 ,
             'prog_type_id' => 1  ],
             

             ['name' => '',
             'faculty_id' => 9 ,
             'prog_type_id' => 1  ],
             

             ['name' => 'B.Sc. Animal Production',
             'faculty_id' => 9 ,
             'prog_type_id' => 1  ],
             

             ['name' => 'B.Sc. Water and Sanitation',
             'faculty_id' => 10 ,
             'prog_type_id' => 1  ],
             
             

             ['name' => 'B.Sc. Physics',
             'faculty_id' => 10 ,
             'prog_type_id' => 1  ],
             
             

             ['name' => 'B.Sc. Mathematics with Economics',
             'faculty_id' => 10 ,
             'prog_type_id' => 1  ],
             
             

             ['name' => 'B.Sc. Statistics',
             'faculty_id' => 10 ,
             'prog_type_id' => 1  ],
             
             

             ['name' => 'B.Sc. Mathematics',
             'faculty_id' => 10 ,
             'prog_type_id' => 1  ],
             
             

             ['name' => 'B.Sc. Mathematics and Statistics',
             'faculty_id' => 10 ,
             'prog_type_id' => 1  ],
             
             

             ['name' => 'B.Sc. Mathematics with Business',
             'faculty_id' => 10 ,
             'prog_type_id' => 1  ],
             
             

             ['name' => 'B.Sc. Laboratory Technology',
             'faculty_id' => 10 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Information Technology',
             'faculty_id' => 11 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Industrial Chemistry',
             'faculty_id' => 11 ,
             'prog_type_id' => 1  ],

             
             ['name' => 'B.Sc. Engineering Physics',
             'faculty_id' => 11 ,
             'prog_type_id' => 1  ],

             
             ['name' => 'B.Sc. Chemistry',
             'faculty_id' => 11 ,
             'prog_type_id' => 1  ],

             
             ['name' => 'B.Sc. Computer Science',
             'faculty_id' => 11 ,
             'prog_type_id' => 1  ],

             
             ['name' => 'B.Sc. Actuarial Science ',
             'faculty_id' => 11 ,
             'prog_type_id' => 1  ],

             
             ['name' => 'B.Sc. Meteorology and Atmospheric Physics',
             'faculty_id' => 11 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Molecular Biology & Biotechnology',
             'faculty_id' => 12 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Environmental Sciences',
             'faculty_id' => 12 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Entomology & Wildlife',
             'faculty_id' => 12 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Biochemistry',
             'faculty_id' => 12 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Forensic Sciences',
             'faculty_id' => 12 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Fisheries & Aquatic Sciences',
             'faculty_id' => 12 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'Bachelor of Medicine & Bachelor of Surgery (MB ChB)',
             'faculty_id' => 13 ,
             'prog_type_id' => 1  ],

             
             ['name' => 'Doctor of Optometry',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Physician Assistant Studies',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Biomedical Sciences ',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Medical Laboratory Technology ',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Diagnostic Medical Sonography',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Diagnostic Imaging Technology',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Sport and Exercise Science',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Sport and Exercise Science',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Clinical Nutrition and Dietetics',
             'faculty_id' => 14 ,
             'prog_type_id' => 1  ],

             ['name' => 'B.Sc. Nursing',
             'faculty_id' => 15 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Mental Health Nursing',
             'faculty_id' => 15 ,
             'prog_type_id' => 1  ],
             
             ['name' => 'B.Sc. Community Mental Health Nursing',
             'faculty_id' => 15 ,
             'prog_type_id' => 1  ],

             
             ['name' => 'Doctor of Pharmacy',
             'faculty_id' => 16,
             'prog_type_id' => 1  ],
             
            //  ['name' => '',
            //  'faculty_id' => 14 ,
            //  'prog_type_id' => 1  ],

        ]);
    }
}
