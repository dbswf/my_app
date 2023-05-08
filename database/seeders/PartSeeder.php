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
                'name' => '胸',
            ],
            [
                'name' => '肩',
            ]
        ]);
    }
}
