<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
                'title' => '落単!',
                'body' => '高校のデータの分析の延長です。テストも授業の中から出るので準備すれば大丈夫です！',
                'user_id' => 'narukesotaro',
                'course_id' => '統計学I',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => NULL,
                ]);
    }
}
