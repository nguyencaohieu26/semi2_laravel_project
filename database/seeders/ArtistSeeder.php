<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [
                "id" => 1,
                "name" => "Rembrandt",
                "status" => 1,
                "description" => "Rembrandt is in the Rijksmuseum in Amsterdam",
                "date_of_birth" => "1606-07-15",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 2,
                "name" => "Albrecht Dürer",
                "status" => 1,
                "description" => "Albrecht Dürer is in the Rijksmuseum in Hungary",
                "date_of_birth" => "1471-05-21",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 3,
                "name" => "Michelangelo",
                "status" => 1,
                "description" => "Italian Renaissance sculptor, painter, and architect",
                "date_of_birth" => "1475-03-06",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 4,
                "name" => "Leonardo da Vinci",
                "status" => 1,
                "description" => "Leonardo da Vinci, Italian painter, draftsman, sculptor, architect, and engineer",
                "date_of_birth" => "1452-04-15",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 5,
                "name" => "Claude Monet",
                "status" => 1,
                "description" => "Oscar-Claude Monet was a French painter and founder of impressionist painting",
                "date_of_birth" => "1840-11-14",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 6,
                "name" => "Vincent van Gogh",
                "status" => 1,
                "description" => "Vincent van Gogh, Dutch painter known for his expressive use of line and color",
                "date_of_birth" => "1853-03-30",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 7,
                "name" => "Edgar Degas",
                "status" => 1,
                "description" => "Edgar Degas, French painter, sculptor, and printmaker",
                "date_of_birth" => "1834-04-19",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 8,
                "name" => "Whistler",
                "status" => 1,
                "description" => "An articulate theorist about art, he did much to introduce modern French painting into England",
                "date_of_birth" => "1834-07-11",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 9,
                "name" => "Gustav Klimt",
                "status" => 1,
                "description" => "Gustav Klimt was an Austrian symbolist painter",
                "date_of_birth" => "1862-07-14",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 10,
                "name" => "Picasso",
                "status" => 1,
                "description" => "Pablo Picasso was the most dominant and influential artist of the 1st half of the 20th century",
                "date_of_birth" => "1881-10-25",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 11,
                "name" => "Georges Braque",
                "status" => 1,
                "description" => "Georges Braque was a major 20th-century French painter, collagist, draughtsman, printmaker and sculptor",
                "date_of_birth" => "1882-05-13",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 12,
                "name" => "Henri Matisse",
                "status" => 1,
                "description" => "Henri Matisse was a French painter, draftsman, sculptor, and printmaker. Known for his use of color",
                "date_of_birth" => "1869-12-31",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
            [
                "id" => 13,
                "name" => "Grant Wood",
                "status" => 1,
                "description" => "Grant Wood is known for his stylized and subtly humorous scenes of rural people, Iowa cornfields, and mythic subjects from American history",
                "date_of_birth" => "1891-02-12",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-11 17:00:00",
                "updated_at" => NULL,
            ],
        ]);
    }
}
