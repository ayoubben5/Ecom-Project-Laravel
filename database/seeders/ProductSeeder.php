<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Iphone XR',
                'price' => '1000$',
                'category' => 'smartphones',
                'description' => 'it features a 6.1-inch LCD display that Apple calls a "Liquid Retina HD Display." It features a 1792 x 828 resolution at 326ppi',
                'gallery' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-xr-select-2019-family?wid=441&amp;hei=529&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1550795424612'
            ],
            [
                'product_name' => 'Oppo reno4',
                'price' => '549$',
                'category' => 'smartphones',
                'description' => 'it features a 6.1-inch LCD display',
                'gallery' => 'https://www.oppo.com/content/dam/oppo/ma/mkt/products/reno4/1440x810px.jpg'
            ],
            [
                'product_name' => 'Sony X95H 4K Ultra HD TV',
                'price' => '4099$',
                'category' => 'TV',
                'description' => 'Convertissez tout type de contenu en 4K avec 4K X-Reality™ PRO',
                'gallery' => 'https://www.sony.com/image/eb9568e51db705613eab781e407820c3?fmt=pjpeg&wid=1014&hei=396&bgcolor=F1F5F9&bgc=F1F5F9'
            ]

        ]

        );
    }
}
