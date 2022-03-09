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
            [
                "id" =>3,
                "email"=>"admin@gmail.com",
                "password" => bcrypt('@admin123'),
                "role" => "ADMIN",
                "user_id" => 3,
                "balance" => "10000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>4,
                "email"=>"thanhphong@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 4,
                "balance" => "5000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>5,
                "email"=>"nguyenquangminh@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 5,
                "balance" => "1500000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>6,
                "email"=>"nguyenmylinh@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 6,
                "balance" => "1200000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>7,
                "email"=>"nguyenquynhanh@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 7,
                "balance" => "160000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>8,
                "email"=>"nguyenquangdao@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 8,
                "balance" => "170000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>9,
                "email"=>"nguyencamtu@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 9,
                "balance" => "170000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>10,
                "email"=>"nguyenmaianh@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 10,
                "balance" => "180000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>11,
                "email"=>"nguyenvanhung@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 11,
                "balance" => "170000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>12,
                "email"=>"nguyentrungkien@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 12,
                "balance" => "170000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>13,
                "email"=>"nguyentrunghieu@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 13,
                "balance" => "170000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>14,
                "email"=>"nguyenthuytien@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 14,
                "balance" => "170000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>15,
                "email"=>"nguyenhoanggiangn@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 15,
                "balance" => "170000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>16,
                "email"=>"nguyenbinhminh@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 16,
                "balance" => "180000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>17,
                "email"=>"nguyenmaitrang@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 17,
                "balance" => "180000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>18,
                "email"=>"vuducnam@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 18,
                "balance" => "180000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>19,
                "email"=>"nguyenthuphuong@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 19,
                "balance" => "180000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],[
                "id" =>20,
                "email"=>"nguyenhoailinh@gmail.com",
                "password" => bcrypt('123456'),
                "role" => "USER",
                "user_id" => 20,
                "balance" => "180000",
                "remember_token" => NULL,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
        ]);
    }
}
