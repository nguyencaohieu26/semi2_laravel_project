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
        ]);
    }
}
