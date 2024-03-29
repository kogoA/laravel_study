<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            ['name' => 'test1',
            'email' => 'test1@test.com',
            'password' => 'passowrd',
            'created_at' => '2022/11/18 11:11:11',
            ],
            ['name' => 'test2',
            'email' => 'test2@test.com',
            'password' => Hash::make('password'),
            'created_at' => '2022/11/19 11:11:11',
            ],
            ['name' => 'test3',
            'email' => 'test3@test.com',
            'password' => Hash::make('password'),
            'created_at' => '2022/11/20 11:11:11',
            ],
            ['name' => 'test4',
            'email' => 'test4@test.com',
            'password' => Hash::make('password'),
            'created_at' => '2022/11/20 11:11:11',
            ],
            ['name' => 'test5',
            'email' => 'test5@test.com',
            'password' => Hash::make('password'),
            'created_at' => '2022/11/20 11:11:11',
            ],
            ['name' => 'test6',
            'email' => 'test6@test.com',
            'password' => Hash::make('password'),
            'created_at' => '2022/11/20 11:11:11',
            ],
            ['name' => 'test7',
            'email' => 'test7@test.com',
            'password' => Hash::make('password'),
            'created_at' => '2022/11/20 11:11:11',
            ],
            ['name' => 'test8',
            'email' => 'test8@test.com',
            'password' => Hash::make('password'),
            'created_at' => '2022/11/20 11:11:11',
            ],
            ['name' => 'test20',
            'email' => 'owne20@test.com',
            'password' => 'kogo1983',
            'created_at' => '2023/01/02 11:11:11',
            ],
        ]);

    }
}
