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
            'name'=>'LG Refrigerator',
            'price'=>'20,000',
            'description'=>'Well Cooled Refrigerator with two doors',
            'category'=>'TV',
            'gallery'=>'https://images.app.goo.gl/4D1mHGiexmB8sErLA'
         ],
         [
            'name'=>'Oppo Mobile',
            'price'=>'20,000',
            'description'=>'4G mobile with dual sim Compatability',
            'category'=>'Mobile',
            'gallery'=>'https://images.app.goo.gl/bmN91845uP5sBbkw9'
         ],
         [
            'name'=>'LG Mobile',
            'price'=>'20,000',
            'description'=>'With Triple AI Camera',
            'category'=>'Mobile',
            'gallery'=>'https://images.app.goo.gl/dZNqTeEiCBY13WzSA'
         ],
         [
            'name'=>'MI TV',
            'price'=>'20,000',
            'description'=>'With WIFI Compatability',
            'category'=>'TV',
            'gallery'=>'https://images.app.goo.gl/UbduH96FoqpXQNEeA'
         ],

         [
            'name'=>'LED TV',
            'price'=>'60,000',
            'description'=>'LED TV',
            'category'=>'TV',
            'gallery'=>'https://images.app.goo.gl/riNeAPPm4TTjTfAL7'
         ],

         ]);

    }
}
