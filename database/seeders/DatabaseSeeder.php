<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           ArtistSeeder::class,
           ProductStatusSeeder::class,
           CategorySeeder::class,
            SizeSeeder::class,
           ProductSeeder::class,
           ProductCategoriesSeeder::class,
           BlogSeeder::class,
            UserSeeder::class,
            AccountSeeder::class,
        ]);
    }
}
