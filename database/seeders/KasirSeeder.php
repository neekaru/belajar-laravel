<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('kasirs')->insert([
            [
                'product_code' => 'P001',
                'product_name' => 'Product 1',
                'price' => 10.99,
                'quantity' => 5,
                'subtotal' => 54.95,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P002',
                'product_name' => 'Product 2',
                'price' => 15.99,
                'quantity' => 3,
                'subtotal' => 47.97,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P003',
                'product_name' => 'Product 3',
                'price' => 20.50,
                'quantity' => 4,
                'subtotal' => 82.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P004',
                'product_name' => 'Product 4',
                'price' => 8.99,
                'quantity' => 6,
                'subtotal' => 53.94,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P005',
                'product_name' => 'Product 5',
                'price' => 12.75,
                'quantity' => 2,
                'subtotal' => 25.50,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P006',
                'product_name' => 'Product 6',
                'price' => 18.25,
                'quantity' => 4,
                'subtotal' => 73.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P007',
                'product_name' => 'Product 7',
                'price' => 9.99,
                'quantity' => 8,
                'subtotal' => 79.92,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P008',
                'product_name' => 'Product 8',
                'price' => 14.50,
                'quantity' => 3,
                'subtotal' => 43.50,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P009',
                'product_name' => 'Product 9',
                'price' => 22.99,
                'quantity' => 2,
                'subtotal' => 45.98,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_code' => 'P010',
                'product_name' => 'Product 10',
                'price' => 16.75,
                'quantity' => 5,
                'subtotal' => 83.75,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
