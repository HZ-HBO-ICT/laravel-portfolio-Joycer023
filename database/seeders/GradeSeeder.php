<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                'course_name' => 'Program and Career Orientation',
                'test_name' => 'Assessment'
            ],
            [
                'course_name' => 'Computer Science Basics',
                'test_name' => 'Case Study'
            ],
            [
                'course_name' => 'Programming Basics',
                'test_name' => 'Case Study'
            ],
            [
                'course_name' => 'Object Oriented Programming',
                'test_name' => 'Case Study'
            ],
            [
                'course_name' => 'Object Oriented Programming',
                'test_name' => 'Project'
            ],
            [
                'course_name' => 'Framework Development 1',
                'test_name' => 'Case Study'
            ],
            [
                'course_name' => 'Framework Project 1',
                'test_name' => 'Project'
            ],
            [
                'course_name' => 'Framework Project 1',
                'test_name' => 'Assessment'
            ],
            [
                'course_name' => 'Framework Project 1',
                'test_name' => 'Report'
            ],
            [
                'course_name' => 'Framework Project 2',
                'test_name' => 'Portfolio'
            ],
            [
                'course_name' => 'Framework Project 2',
                'test_name' => 'Project'
            ],
            [
                'course_name' => 'Framework Project 2',
                'test_name' => 'Assessment'
            ],
            [
                'course_name' => 'Personality 1',
                'test_name' => 'Portfolio'
            ],
            [
                'course_name' => 'Personality 2',
                'test_name' => 'Portfolio'
            ],
            [
                'course_name' => 'Personal Professional Development',
                'test_name' => 'Portfolio'
            ],
        ]);
    }
}
