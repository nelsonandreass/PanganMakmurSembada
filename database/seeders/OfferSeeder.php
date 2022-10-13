<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('offers')->insert([
            'original_price' => '100.000',
            'discounted_price' => '50.000'
            
        ]);
    }
}
