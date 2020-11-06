<?php

namespace Database\Seeders;

use App\Models\Categories;
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
        Categories::truncate();
        Categories::insert([
            ['id' => 1, 'name' => 'Motoryzacja'],
            ['id' => 2, 'name' => 'Elektronika'],
            ['id' => 3, 'name' => 'Dom i Ogród'],
            ['id' => 4, 'name' => 'Sport']
        ]);
    }
}
