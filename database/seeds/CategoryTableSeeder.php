<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas =[
            'Yangon',
            'Mandalay',
            'Bagan',
            'Inle'
        ];
        foreach($datas as $data){
            $cat = new Category();
            $cat->title = $data;
            $cat->save();
        }
    }
}
