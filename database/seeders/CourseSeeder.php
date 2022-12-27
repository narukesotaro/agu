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
                'name' => '統計学I',
                'group' => 'A',
                'semester' => '前期',
                'week' => '月',
                'period' => '5',
                'teacher' => '前田俊之',
                'online_or_offline' => '対面',
                'how_to_valuate' => '期末試験100%',
                'attendance' => '口頭',
                'text' => '指定教科書　レジュメ',
                'homework' => '授業レポート',
                'test_type' => '対面記述式',
                'has_report' => 'あり',
                'has_presentation' => 'なし',
                'image_path' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => NULL,
                ]);
    }
}
