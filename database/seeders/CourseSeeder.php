<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
                'group' => 'A',
                'name' => 'statisticsI',
                'semester' => 'previous',
                'week' => 'monday',
                'period' => '5',
                'teacher' => 'maeda toshiyuki',
                'online_or_offline' => 'offline',
                'how_to_valuate' => 'term-end exam 100%',
                'attendance' => 'oral',
                'text' => 'textbook resume',
                'homework' => 'report',
                'test_type' => 'offline written test',
                'has_report' => '1',
                'has_presentation' => '0',
                'image_path' => 'null',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => NULL,
                ]);
    }
}
