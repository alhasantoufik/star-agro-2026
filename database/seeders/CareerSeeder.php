<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('careers')->insert([
            [
                'job_title' => 'Frontend Developer',
                'location' => 'Dhaka, Bangladesh',
                'job_type' => 'Full-time',
                'salary' => 'BDT 50,000 - 80,000',
                'description' => 'We are looking for a talented Frontend Developer to join our team.',
                'responsibilities' => 'Developing and maintaining user interfaces, optimizing web applications.',
                'others_requirements' => 'Good communication skills, team player.',
                'educational_requirements' => 'Bachelor\'s degree in Computer Science or related field.',
                'experience_requirements' => '2+ years of experience in frontend development.',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_title' => 'Backend Developer',
                'location' => 'Chittagong, Bangladesh',
                'job_type' => 'Full-time',
                'salary' => 'BDT 60,000 - 100,000',
                'description' => 'Looking for a skilled Backend Developer to manage server-side logic.',
                'responsibilities' => 'Build APIs, manage databases, implement business logic.',
                'others_requirements' => 'Problem-solving skills, knowledge of Laravel framework.',
                'educational_requirements' => 'Bachelor\'s degree in Computer Science or related field.',
                'experience_requirements' => '3+ years of experience in backend development.',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_title' => 'Graphic Designer',
                'location' => 'Remote',
                'job_type' => 'Part-time',
                'salary' => 'BDT 30,000 - 50,000',
                'description' => 'Creative Graphic Designer wanted for designing digital and print media.',
                'responsibilities' => 'Create visual concepts, design marketing materials, collaborate with team.',
                'others_requirements' => 'Proficiency in Adobe Suite, creativity.',
                'educational_requirements' => 'Bachelor\'s degree in Design or related field.',
                'experience_requirements' => '1+ year of experience in graphic design.',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
