<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')
            ->insert([
                'name' => 'Salchichas',
                'description' => 'Salchichas Zenu',
                'image_path' => 'https://www.zenu.com.co/sites/default/files/productos/salchicha_tradicional_0.jpg',
                'price' =>  12333
            ]
            );
        DB::table('products')->insert(
            [
                'name' => 'Coco',
                'description' => 'Un gran coco',
                'image_path' => 'https://www.zenu.com.co/sites/default/files/productos/salchicha_tradicional_0.jpg',
                'price' =>  5000
            ]
            );

        DB::table('products')->insert(
            [
                'name' => 'Gaseosa',
                'description' => 'Gaseosa postobon',
                'image_path' => 'https://www.zenu.com.co/sites/default/files/productos/salchicha_tradicional_0.jpg',
                'price' =>  3000
            ]
            );
        DB::table('products')->insert(
            [
                'name' => 'Jugo Hit',
                'description' => 'Jugos hit',
                'image_path' => 'https://www.zenu.com.co/sites/default/files/productos/salchicha_tradicional_0.jpg',
                'price' =>  4000
            ]
            );

    }
}
