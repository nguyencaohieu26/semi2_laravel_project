<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
           [
              "id" => 1,
              "content_post" => "Content",
              "title"       => "Title",
              "image"       => "",
              "tag"         => "Comtemporary",
              "author" 	    => "John Dehad",
              "status"      => 1,
              "deleted_at"  => NULL,
              "created_at"  => "2022-02-11 17:00:00",
              "updated_at"  => NULL,
           ]
        ]);
    }
}
