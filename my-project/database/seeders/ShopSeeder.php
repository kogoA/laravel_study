<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['owner_id' => 1,
            'name' => 'ここに店舗名が入ります',
            'infomation' => 'ここにお店の情報が入ります',
            'filename' => '',
            'is_selling' => true,
            ],
            ['owner_id' => 2,
            'name' => 'ここに店舗名が入ります',
            'infomation' => 'ここにお店の情報が入ります',
            'filename' => '',
            'is_selling' => true,
            ],
            ['owner_id' => 9,
            'name' => '学大ショップ',
            'infomation' => '徒歩8分',
            'filename' => '',
            'is_selling' => true,
            ],
        ]);
    }
}
