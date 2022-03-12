<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonData = '[
            {"name":"Retail"},
            {"name":"Shoes"},
            {"name":"Clothing"}, 
            {"name":"Entertainment"}
        ]';

        DB::table('category')->insert(json_decode($jsonData, true));
    }
}
