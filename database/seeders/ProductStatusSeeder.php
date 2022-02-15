<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_statuses')->insert([
           [
               "id"=>1,
               "name"=>"Live Now",
               "deleted_at"=>NULL,
               "created_at" =>"2022-02-11 17:00:00",
               "updated_at"=>NULL
           ],
            [
                "id"=>2,
                "name"=>"Upcoming Now",
                "deleted_at"=>NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at"=>NULL
            ],
            [
                "id"=>3,
                "name"=>"Result",
                "deleted_at"=>NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at"=>NULL
            ]
        ]);
    }
}
