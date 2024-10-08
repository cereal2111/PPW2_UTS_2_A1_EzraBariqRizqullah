<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'code' => Str::random(10),
                'name' => 'Product 1',
                'quantity' => 50,
                'price' => 19.99,
                'description' => 'This is a description for Product 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => Str::random(10),
                'name' => 'Product 2',
                'quantity' => 30,
                'price' => 29.99,
                'description' => 'This is a description for Product 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => Str::random(10),
                'name' => 'Product 3',
                'quantity' => 20,
                'price' => 9.99,
                'description' => 'This is a description for Product 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


