<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
           'slug'=>'Laravel developer',
           'title'=>'Php Blog',
           'description'=>'PHP Developer is the best of language',
           'image_path'=>'images',
           'user_id'=>'1'

        ]); 
    }
}
