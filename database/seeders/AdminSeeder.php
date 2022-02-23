<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Phong',
                'email' => 'phong269@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Hieu',
                'email' => 'hieu@gmail.com',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}
