<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
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
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
            ['owner_id' => 2,
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
            ['owner_id' => 3,
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
            ['owner_id' => 4,
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
            ['owner_id' => 5,
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
            ['owner_id' => 6,
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
            ['owner_id' => 7,
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
            ['owner_id' => 8,
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
            ['owner_id' => 9,
            'filename' => 'sample1.jpg',
            'title' => null,
            ],
        ]);
    }
}
