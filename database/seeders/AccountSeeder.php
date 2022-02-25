<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('accounts')->insert([
            [
                "id" =>1,
                "email"=>"hieu@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 1,
                "balance" => "10000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>2,
                "email"=>"huy@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 2,
                "balance" => "10000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
        ]);
    }
}
