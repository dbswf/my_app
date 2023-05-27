<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->truncate();
        DB::table('parts')->insert([
            
            [
                'name' => '肩（前部）',
            ],
            [
                'name' => '肩（後部）',
            ],
            [
                'name' => '胸',
            ],
            [
                'name' => '上腕二頭筋',
            ],
            [
                'name' => '上腕三頭筋',
            ],
            [
                'name' => '背中',
            ],
            [
                'name' => '背中（下部）',
            ],
            [
                'name' => '前腕',
            ],
            [
                'name' => '大腿四頭筋',
            ],
            [
                'name' => 'ハムストリング',
            ]
            
        ]);
    }
}
