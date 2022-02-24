<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_categories')->insert([
           [
               "id"=>1,
               "product_id"=>1,
               "category_id"=>4,
               "created_at"=>"2022-02-15 16:38:44",
               "updated_at"=>"2022-02-15 16:38:44"
           ],
            [
                "id"=>2,
                "product_id"=>1,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>3,
                "product_id"=>1,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>4,
                "product_id"=>2,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>5,
                "product_id"=>2,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>6,
                "product_id"=>2,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>7,
                "product_id"=>2,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>8,
                "product_id"=>3,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>9,
                "product_id"=>3,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>10,
                "product_id"=>3,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>11,
                "product_id"=>4,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>12,
                "product_id"=>4,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>13,
                "product_id"=>4,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>14,
                "product_id"=>4,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>15,
                "product_id"=>5,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>16,
                "product_id"=>5,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>17,
                "product_id"=>5,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>18,
                "product_id"=>5,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>19,
                "product_id"=>6,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>20,
                "product_id"=>6,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>21,
                "product_id"=>6,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>22,
                "product_id"=>7,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>23,
                "product_id"=>7,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>24,
                "product_id"=>7,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>25,
                "product_id"=>7,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>26,
                "product_id"=>8,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>27,
                "product_id"=>8,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>28,
                "product_id"=>8,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>29,
                "product_id"=>9,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>30,
                "product_id"=>9,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>31,
                "product_id"=>9,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>32,
                "product_id"=>10,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>33,
                "product_id"=>10,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>34,
                "product_id"=>11,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>35,
                "product_id"=>11,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>36,
                "product_id"=>12,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>37,
                "product_id"=>12,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>38,
                "product_id"=>12,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>39,
                "product_id"=>12,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>40,
                "product_id"=>13,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>41,
                "product_id"=>13,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>42,
                "product_id"=>13,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>43,
                "product_id"=>14,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>44,
                "product_id"=>14,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>45,
                "product_id"=>14,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>46,
                "product_id"=>15,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>47,
                "product_id"=>15,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>48,
                "product_id"=>15,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>49,
                "product_id"=>16,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>50,
                "product_id"=>16,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>51,
                "product_id"=>17,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>52,
                "product_id"=>17,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>53,
                "product_id"=>17,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>54,
                "product_id"=>18,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>55,
                "product_id"=>18,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>56,
                "product_id"=>18,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>57,
                "product_id"=>19,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>58,
                "product_id"=>19,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>59,
                "product_id"=>20,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>60,
                "product_id"=>21,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>61,
                "product_id"=>21,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>62,
                "product_id"=>22,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>63,
                "product_id"=>22,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>64,
                "product_id"=>22,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>65,
                "product_id"=>22,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>66,
                "product_id"=>23,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>67,
                "product_id"=>23,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>68,
                "product_id"=>23,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>69,
                "product_id"=>23,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>70,
                "product_id"=>23,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>71,
                "product_id"=>24,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>72,
                "product_id"=>24,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>73,
                "product_id"=>24,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>74,
                "product_id"=>24,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>75,
                "product_id"=>24,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>76,
                "product_id"=>25,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>77,
                "product_id"=>25,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>78,
                "product_id"=>25,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>79,
                "product_id"=>25,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>80,
                "product_id"=>26,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>81,
                "product_id"=>26,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>82,
                "product_id"=>26,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>83,
                "product_id"=>26,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>84,
                "product_id"=>26,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>85,
                "product_id"=>27,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>86,
                "product_id"=>27,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>87,
                "product_id"=>27,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>88,
                "product_id"=>27,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>89,
                "product_id"=>28,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>90,
                "product_id"=>28,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>91,
                "product_id"=>28,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>92,
                "product_id"=>28,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>93,
                "product_id"=>28,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>94,
                "product_id"=>29,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>95,
                "product_id"=>29,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>96,
                "product_id"=>29,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>97,
                "product_id"=>29,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>98,
                "product_id"=>30,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>99,
                "product_id"=>30,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>100,
                "product_id"=>30,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>101,
                "product_id"=>30,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>102,
                "product_id"=>30,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>103,
                "product_id"=>31,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>104,
                "product_id"=>31,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>105,
                "product_id"=>31,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>106,
                "product_id"=>31,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>107,
                "product_id"=>31,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>108,
                "product_id"=>32,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>109,
                "product_id"=>32,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>110,
                "product_id"=>32,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>111,
                "product_id"=>32,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>112,
                "product_id"=>32,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>113,
                "product_id"=>32,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>114,
                "product_id"=>33,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>115,
                "product_id"=>33,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>116,
                "product_id"=>33,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>117,
                "product_id"=>34,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>118,
                "product_id"=>34,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>119,
                "product_id"=>35,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>120,
                "product_id"=>35,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>121,
                "product_id"=>35,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>122,
                "product_id"=>36,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>123,
                "product_id"=>36,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>124,
                "product_id"=>36,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>125,
                "product_id"=>37,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>126,
                "product_id"=>37,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>127,
                "product_id"=>38,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>128,
                "product_id"=>38,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>129,
                "product_id"=>39,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>130,
                "product_id"=>39,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>131,
                "product_id"=>39,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>132,
                "product_id"=>39,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>133,
                "product_id"=>40,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>134,
                "product_id"=>40,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>135,
                "product_id"=>40,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>136,
                "product_id"=>41,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>137,
                "product_id"=>41,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>138,
                "product_id"=>42,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>139,
                "product_id"=>42,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>140,
                "product_id"=>43,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>141,
                "product_id"=>43,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>142,
                "product_id"=>44,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>143,
                "product_id"=>44,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>144,
                "product_id"=>45,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>145,
                "product_id"=>45,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>146,
                "product_id"=>45,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>147,
                "product_id"=>46,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>148,
                "product_id"=>47,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>149,
                "product_id"=>48,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>150,
                "product_id"=>48,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>151,
                "product_id"=>48,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>152,
                "product_id"=>48,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>153,
                "product_id"=>49,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>154,
                "product_id"=>49,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>155,
                "product_id"=>49,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>156,
                "product_id"=>49,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>157,
                "product_id"=>49,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>158,
                "product_id"=>50,
                "category_id"=>4,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>159,
                "product_id"=>50,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>160,
                "product_id"=>51,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>161,
                "product_id"=>51,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>162,
                "product_id"=>51,
                "category_id"=>9,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
            [
                "id"=>163,
                "product_id"=>52,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>164,
                "product_id"=>52,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>165,
                "product_id"=>52,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>166,
                "product_id"=>52,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>167,
                "product_id"=>53,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>168,
                "product_id"=>53,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>169,
                "product_id"=>53,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>170,
                "product_id"=>54,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>171,
                "product_id"=>54,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>172,
                "product_id"=>54,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>173,
                "product_id"=>54,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>174,
                "product_id"=>55,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>175,
                "product_id"=>55,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>176,
                "product_id"=>55,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>177,
                "product_id"=>55,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>178,
                "product_id"=>56,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>179,
                "product_id"=>56,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>180,
                "product_id"=>56,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>181,
                "product_id"=>57,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>182,
                "product_id"=>57,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>183,
                "product_id"=>58,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>184,
                "product_id"=>58,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>185,
                "product_id"=>58,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>186,
                "product_id"=>59,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>187,
                "product_id"=>59,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>188,
                "product_id"=>59,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>189,
                "product_id"=>60,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>190,
                "product_id"=>60,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>191,
                "product_id"=>60,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>192,
                "product_id"=>60,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>193,
                "product_id"=>61,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>194,
                "product_id"=>61,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>195,
                "product_id"=>61,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>196,
                "product_id"=>61,
                "category_id"=>12,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>197,
                "product_id"=>61,
                "category_id"=>13,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>198,
                "product_id"=>61,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>199,
                "product_id"=>61,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>200,
                "product_id"=>62,
                "category_id"=>5,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>201,
                "product_id"=>62,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>202,
                "product_id"=>62,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>203,
                "product_id"=>63,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>204,
                "product_id"=>63,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>205,
                "product_id"=>63,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>206,
                "product_id"=>63,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>207,
                "product_id"=>64,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>208,
                "product_id"=>64,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>209,
                "product_id"=>64,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>210,
                "product_id"=>64,
                "category_id"=>11,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>211,
                "product_id"=>64,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>212,
                "product_id"=>65,
                "category_id"=>6,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>213,
                "product_id"=>65,
                "category_id"=>7,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>214,
                "product_id"=>65,
                "category_id"=>8,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>215,
                "product_id"=>65,
                "category_id"=>10,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],[
                "id"=>216,
                "product_id"=>65,
                "category_id"=>14,
                "created_at"=>"2022-02-15 16:38:44",
                "updated_at"=>"2022-02-15 16:38:44"
            ],
        ]);
    }
}
