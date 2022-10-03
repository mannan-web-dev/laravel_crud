<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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


        // \DB::table('categories')->insert([
        //     'name' =>'jamal44',
        //     'is_active' => true
        // ]);

        Category::create([
            'name' =>'jamal440',
           'is_active' => true
           ]);
        //    Category::create([
        //     'name' =>'jamal90',
        //    'is_active' => true
        //    ]);


    }
}
