<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Best Food',
            'ar_name' => 'أفضل طعام',
        ]);
        Category::create([
            'name' => 'New Taste',
            'ar_name' => 'طعم جديد',
        ]);
    }
}
