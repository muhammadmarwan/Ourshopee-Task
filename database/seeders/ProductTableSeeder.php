<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'product_name' => 'I Phone X',
                'product_brand' => 'Apple',
            ], [
                'product_name' => 'Printer',
                'product_brand' => 'Epson',
            ], [
                'product_name' => 'Air Book',
                'product_brand' => 'Apple',
            ], [
                'product_name' => 'Smart Watch',
                'product_brand' => 'MI',
            ], [
                'product_name' => 'Book',
                'product_brand' => 'Camel',
            ], [
                'product_name' => 'Pen',
                'product_brand' => 'Camel',
            ],
        ]);
    }
}
