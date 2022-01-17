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
        //
        DB::table('products')->insert([
            [ 
                'name'=>'Image 1',
                "price"=>"test",
                "category"=>"test",
                "description"=>"test",
                "gallery"=>"https://i.imgur.com/FMrSdFn.jpg"
            ],
            [ 
                'name'=>'Image 2',
                "price"=>"test",
                "category"=>"test",
                "description"=>"test",
                "gallery"=>"https://i.imgur.com/Yq0mvXL.jpg"
            ],
            [ 
                'name'=>'Image 3',
                "price"=>"test",
                "category"=>"test",
                "description"=>"test",
                "gallery"=>"https://i.imgur.com/YdHsnKc.jpg"
            ],
            [ 
                'name'=>'Image 4',
                "price"=>"test",
                "category"=>"test",
                "description"=>"test",
                "gallery"=>"https://i.imgur.com/dL025jv.jpg"
            ]
        ]);
    }
}
