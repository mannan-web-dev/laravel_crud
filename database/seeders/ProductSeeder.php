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
        // Category::create([
        //     'name' =>'jamal80',
        //    'is_active' => true
        //    ]);


        Product::create([
             'id_name'=>'mannarn12',
             'address'=>'1rr232',
             'phone'=>'0865643477',
             'email'=>'mannrrran@gmail.com',
             'department'=>'mannan'

        ]);
    }
}
