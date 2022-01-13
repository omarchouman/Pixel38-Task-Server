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
        $phone1 = Product::create([
            'name' => 'First Phone',
            'quantity' => 10,
            'unit' => 'piece',
            'price' => 500,
            'weight' => '0.2 kg',
        ]);
        $phone2 = Product::create([
            'name' => 'Second Phone',
            'quantity' => 40,
            'unit' => 'piece',
            'price' => 1000,
            'weight' => '0.25 kg',
        ]);
        $phone3 = Product::create([
            'name' => 'Third Phone',
            'quantity' => 80,
            'unit' => 'piece',
            'price' => 1000,
            'weight' => '0.22 kg',
        ]);
        $phone4 = Product::create([
            'name' => 'Fourth Phone',
            'quantity' => 5,
            'unit' => 'piece',
            'price' => 199.99,
            'weight' => '0.3 kg',
        ]);
        $phone5 = Product::create([
            'name' => 'Fifth Phone',
            'quantity' => 0,
            'unit' => 'piece',
            'price' => 2500,
            'weight' => '0.32 kg',
        ]);
    }
}
