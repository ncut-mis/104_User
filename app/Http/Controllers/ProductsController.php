<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $cc = 0;
        foreach ($product as $count){
            $category_name = Category::all()->where('id',$count['Category_id'])->pluck('name');
            $product[$cc]['C_name'] = $category_name->first();
            $cc++;
        }
        return view('productlist', compact('product'));
    }

    public function detail($id)
    {
        $product = Product::all()->where('id',$id);
        $category_name = Category::all()->where('id',$product->first()['Category_id'])->pluck('name');
        $product->first()['C_name'] = $category_name->first();
        return view('productdetail',compact('product'));
    }

    public function search(Request $request)
    {
        $search = $request['name'];
        $product = Product::all()->where('name','LIKE',$search);

        return view('productlist',compact('product'));
    }
}
