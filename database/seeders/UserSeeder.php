<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "id" =>1,
                "avatar"=>"Avatar",
                "firstname" => "nguyen",
                "lastname" => "hieu",
                "address" => "Ha Noi",
                "gender" =>1,
                "email" => "hieu@gmail.com",
                "date_of_birth" => "1998-06-09",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>2,
                "avatar"=>"Avatar",
                "firstname" => "nguyen",
                "lastname" => "huy",
                "address" => "Ha Noi",
                "gender" =>1,
                "email" => "huy@gmail.com",
                "date_of_birth" => "1998-10-09",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
        ]);
    }
}
