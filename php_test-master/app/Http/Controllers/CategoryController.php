<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Input;


class CategoryController extends Controller
{
    function create(){
        return view('category.form');
    }


    function index(){
        $obj_list = Category::all();
        return view('category.list')
            ->with('obj_list', $obj_list);
    }
    function edit($id){
        $obj = Category::find($id);
        if ($obj == null){
            return view('404');
        }
        return view('category.edit') ->with('obj' , $obj);
    }

    function store(){
        $obj = new Category();
        $obj -> name = Input::get('name');
        $obj -> description = Input::get('description');
        $obj -> image = Input::get('image');
        $obj -> save();
        return redirect('category/list');
    }


    function update(){

        $obj = Category::find(Input::get('id'));
        if ($obj == null){
            return view('404');
        }
        $obj -> name = Input::get('name');
        $obj -> description = Input::get('description');
        $obj -> image = Input::get('image');
        $obj -> save();
        return redirect('category/list');
    }


    function destroy($id){
        $obj = Category::find($id);
        if ($obj == null){
            return response()->json(['error' => 'not found'], 404);
        }
        $obj->delete();
        return response()->json(['message' => 'Deleted'], 200);


    }

}
