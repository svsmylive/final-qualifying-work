<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = 'Дом';
        $residence='Центральный';
        for ($i = 0; $i < 10; $i++)
            DB::table('products')->insert([
                'name'=>Str::random(8),
                'type' => $type,
                'residence' => $residence,
                'descriptionPreview' => 'Nam gravida elit non massa congue, ac commodo ipsum mattis. Fusce erat magna, egestas vitae arcu non, posuere iaculis leo.',
                'descriptionDetail' => 'Nam gravida elit non massa congue, ac commodo ipsum mattis. Fusce erat magna, egestas vitae arcu non, posuere iaculis leo.',
                'price' => rand(10000, 20000),
                'img'=>'details_'.rand(1,10).'.jpg',
                'lotSize'=> rand(500, 600),
                'beds'=> rand(3,7),
                'baths'=> rand(2,4),
                'garage'=> rand(1,2)
            ]);
    }
}

