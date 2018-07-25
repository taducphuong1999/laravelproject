<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' =>1,
                'name'=>'Bánh nướng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thuvienhinhanh.net/wp-content/uploads/2016/11/hinh-anh-banh-sinh-nhat-dep-2017-de-thuong-y-nghia-nhat-cho-moi-nguoi25.jpg',
            ],


            [
                'id' =>2,
                'name'=>'Bánh trứng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://media.vietq.vn/thumb_x394x263/upload/2017/01/10/nhung-luu-y-de-co-chiec-banh-tet-ngon-cho-ngay-tet1.jpg',
            ],

            [
                'id' =>3,
                'name'=>'Bánh kem',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://taihinhnendep.biz/content/uploads/2014/11/hinh-nen-banh-ngot-de-thuong-103-9.jpg',
            ],


            [
                'id' =>4,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>5,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>6,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>7,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>8,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],

            [
                'id' =>9,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ], [
                'id' =>10,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ], [
                'id' =>11,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>12,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>13,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>14,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>15,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>16,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>17,
                'name'=>'Bánh bông lan',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'https://studios.vn/wp-content/uploads/2017/08/dich-vu-chup-anh-san-pham-banh-trung-thu-gia-re-tai-ha-noi-2.jpg',
            ],

            [
                'id' =>18,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],

            [
                'id' =>19,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],
            [
                'id' =>20,
                'name'=>'Bánh chưng',
                'description'=>'ngon',
                'price'=>400,
                'categoryId'=>2,
                'images'=>'http://thegioimuc.vn/wp-content/uploads/2016/01/banh-chung-2.jpg',
            ],

        ]);
    }
}
