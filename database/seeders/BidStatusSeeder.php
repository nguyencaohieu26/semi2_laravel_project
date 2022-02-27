<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bid_statuses')->insert([
            [
                "id" => 1,
                "name" => "bidding",
                "status" => 1,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 2,
                "name" => "give up",
                "status" => 1,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 3,
                "name" => "payment",
                "status" => 1,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 4,
                "name" => "success",
                "status" => 1,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
        ]);
    }
}
