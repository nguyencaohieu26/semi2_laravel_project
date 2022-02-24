<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
           [
               "id" =>4,
               "category_code" => "A100",
               "name" => "Abstract Art",
               "image" => "1644813552-A100.jpg",
               "status" => 0,
               "deleted_at" => NULL,
               "created_at" =>"2022-02-13 21:39:12",
               "updated_at" =>"2022-02-13 21:39:12"
           ],
            [
                "id" =>5,
                "category_code" => "A101",
                "name" => "American Art",
                "image" => "1644813573-A101.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>6,
                "category_code" => "A102",
                "name" => "Animal Art",
                "image" => "1644813602-A102.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>7,
                "category_code" => "A103",
                "name" => "Chinese Art",
                "image" => "1644813622-A103.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>8,
                "category_code" => "A104",
                "name" => "Folk Art",
                "image" => "1644813643-A104.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>9,
                "category_code" => "A105",
                "name" => "Graphic Art",
                "image" => "1644813664-A105.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>10,
                "category_code" => "A106",
                "name" => "Illustration Art",
                "image" => "1644813694-A106.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>11,
                "category_code" => "A107",
                "name" => "Pop Art",
                "image" => "1644813710-A107.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>12,
                "category_code" => "A108",
                "name" => "Watercolor Art",
                "image" => "1644813734-A108.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>13,
                "category_code" => "A109",
                "name" => "Famous Art",
                "image" => "1644813851-A109.jpg",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>14,
                "category_code" => "A801",
                "name" => "Japanese Art",
                "image" => "1645692254-A05261.png",
                "status" => 0,
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
        ]);
    }
}
