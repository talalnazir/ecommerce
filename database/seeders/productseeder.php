<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->where('id',2)->update([
           "name"=>"shirt",
            "price"=>"1000",
            "discription"=>"good stuf",
            "gallary"=>"https://images.pexels.com/photos/2249248/pexels-photo-2249248.jpeg ",
           "catigory"=>"clothes",
        
        
        ]);
    }
}
