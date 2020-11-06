<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vat = 1.23;
        Product::truncate();
        Product::insert([
            ['id' => 1, 'name' => 'Audi', 'description' => 'Duży i ładny. Dodatkowo czerwony, czyli szybki.', 'id_category' => 1, 'price' => 300000,'brutto' => 300000 * $vat,'created_at' => '2020-11-06 10:59:42'],
            ['id' => 2, 'name' => 'T4', 'description' => 'Duży i ładowny', 'id_category' => 1, 'price' => 900000,'brutto' => 900000 * $vat,'created_at' => '2020-11-06 11:59:42'],
            ['id' => 3, 'name' => 'Gniazdko', 'description' => 'Dwa gniazda', 'id_category' => 2, 'price' => 750,'brutto' => 750 * $vat,'created_at' => '2020-11-06 12:59:42'],
            ['id' => 4, 'name' => 'Piłka', 'description' => 'Ogrągła', 'id_category' => 4, 'price' => 10000,'brutoo' => 10000 * $vat,'created_at' => '2020-11-06 13:59:42'],
        ]);
    }
}
