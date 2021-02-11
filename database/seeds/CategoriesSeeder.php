<?php

use Illuminate\Database\Seeder;
use App\CategoryModel;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CategoryModel::class, 10)->create();

    }
}
