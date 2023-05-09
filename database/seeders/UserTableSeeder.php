<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => "Admin Dev",
                'email'     => "admin@example.com",
                'password'  => bcrypt('sandiaman')
            ],
            [
                'name'      => "User Dev",
                'email'     => "user@example.com",
                'password'  => bcrypt('password')
            ]
        ];
        DB::table('users')->insert($users);
    }
}
