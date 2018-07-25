<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\Input;


class ProductController extends Controller
{
    function create(){
        return view('product.form');
    }


    function index(){
        $obj_list = Product::all();
        return view('product.list')
            ->with('obj_list', $obj_list);

    }
    function edit($id){
        $product = Product::find($id);
        if ($product == null){
            return view('404');
        }
        return view('product.edit') ->with('product' , $product);
    }

    function store(){
        $product = new Product();
        $product -> name = Input::get('name');
        $product -> price = Input::get('price');
        $product -> categoryId = Input::get('categoryId');
        $product -> description = Input::get('description');
        $product -> image = Input::get('image');
        $product -> save();
        return redirect('Product/list');
    }


    function update(){

        $product = Product::find(Input::get('id'));
        if ($product == null){
            return view('404');
        }
        $product -> name = Input::get('name');
        $product -> price = Input::get('price');
        $product -> description = Input::get('description');
        $product -> image = Input::get('image');
        $product -> save();
        return redirect('Product/list');
    }


    function destroy($id){
        $product = Product::find($id);
        if ($product == null){
            return response()->json(['error' => 'not found'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Deleted'], 200);


    }

}
