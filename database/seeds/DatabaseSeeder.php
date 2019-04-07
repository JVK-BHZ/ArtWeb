<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        factory(App\Model\Product::class,5)->create(); 
        $this->call(ProductImagesTableSeeder::class);
       // factory(App\Model\Review::class,300)->create();
    }
}
