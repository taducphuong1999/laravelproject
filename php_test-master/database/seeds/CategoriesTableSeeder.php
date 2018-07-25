<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Bánh ngon ',
                'description'=>'Bánh ',
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Bánh kem',
                'description'=>'Bánh ',
                'images'=>'https://khoanh24.com/uploads/w750/2018/05/23/800-sn-85b04ca629fcfc_80146124ec52cc7f222d8c732c48dfd2.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Bánh cực ngon',
                'description'=>'Bánh',
                'images'=>'https://hoidaubepaau.com/wp-content/uploads/2015/12/hinh-anh-banh-castella-ngon.jpg'
            ]
            ,
            [
                'id'=>4,
                'name'=>'Bánh cực ngon',
                'description'=>'Bánh',
                'images'=>'https://hoidaubepaau.com/wp-content/uploads/2015/12/hinh-anh-banh-castella-ngon.jpg'
            ]
            ,
            [
                'id'=>5,
                'name'=>'Bánh cực ngon',
                'description'=>'Bánh',
                'images'=>'https://hoidaubepaau.com/wp-content/uploads/2015/12/hinh-anh-banh-castella-ngon.jpg'
            ]

        ]);

    }
}
