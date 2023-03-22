<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            'nama' => 'Banner',
         
        ]);
        \DB::table('categories')->insert([
            'nama' => 'MiniGallery',
         
        ]);
        \DB::table('categories')->insert([
            'nama' => 'Product',
         
        ]);
    }
}
