<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Product::create([
        //     'name'=>'a',
        //     'description'=>'a',
        //     'image'=>'123',
        //     'color'=>'black',
        //     'price'=>1000000,
        // ]);
        // Product::create([
        //     'name'=>'b',
        //     'description'=>'b',
        //     'image'=>'123',
        //     'color'=>'yellow',
        //     'price'=>2000000,
        // ]);
        // Product::create([
        //     'name'=>'c',
        //     'description'=>'c',
        //     'image'=>'123',
        //     'color'=>'red',
        //     'price'=>3000000,
        // ]);
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'color' => 'purple',
                'price' => 100
            ],

            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'color' => 'blue',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                'price' => 500
            ],

            [
                'name' => 'Google Pixel 2 XL',
                'description' => 'Google Pixel Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                'color' => 'yellow',
                'price' => 400

            ],

            [
                'name' => 'LG V10 H800',
                'description' => 'LG Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                'color' => 'black',
                'price' => 200
            ]
        ];


        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
